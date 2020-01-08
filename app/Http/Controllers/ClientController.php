<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use App\VpnAclList;
use App\VpnUser;
use App\VpnUserGroup;
use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ClientController extends Controller
{
	public function registerClient(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(),
        [
            'txtAccess.*' => 'required|ipv4',
            'expiry_date' => 'date'
        ],
        [
            'txtAccess.*.required' => 'Access List is required!',
            'txtAccess.*.ipv4' => 'Access List must be a valid IPv4!',
            'expiry_date.date' => 'Expiry date must be in date format!'
        ]
        );
    	if($validator->fails()){
            foreach($validator->errors()->all() as $error){
                return ['status' => 'failed', 'errMsg' => $error];
            }
    	}

        $request->ticket = Crypt::decrypt($request->ticket);
        $request->user_name = Crypt::decrypt($request->user_name);
        $request->binusianid = Crypt::decrypt($request->binusianid);
        $request->user_email = Crypt::decrypt($request->user_email);
        $request->manager_email = Crypt::decrypt($request->manager_email);
        $request->user_department = Crypt::decrypt($request->user_department);
        if(isset($request->head_email))
            $request->head_email = Crypt::decrypt($request->manager_email);

        ///////// INSERT DEPARTMENT AND USER
            if(empty(Department::where('name',$request->user_department)->first())){
                $department = new Department();
                $department->name = $request->user_department;
                $department->save();
            }

            if(empty(User::where('name',$request->user_name)->first())){
                $user = new User();
                $user->name = $request->user_name;
                $user->email = $request->user_email;
                $user->department_id = Department::where('name',$request->user_department)->first()->id;
                $user->save();
            }

            ////////// INSERT VPN_USER_GROUP
            $aclDept = $request->user_department;
            $aclDept = strtolower($aclDept);
            $aclDept = str_replace(' ','-',$aclDept);
            $aclDept = explode("-",$aclDept);
            if(count($aclDept)>1)
                $aclDept = "vpn-".$aclDept[0]."-".$aclDept[1];
            else
                $aclDept = "vpn-".$aclDept[0];

            if(empty(VpnUserGroup::where('department_id', Department::where('name',$request->user_department)->first()->id)->first())){
                $aclDeptAllow = $aclDept."-allow";

                $VpnUserGroup = new VpnUserGroup;
                $VpnUserGroup->department_id = Department::where('name',$request->user_department)->first()->id;
                $VpnUserGroup->acl_group_name = $aclDept;
                $VpnUserGroup->acl_group_name_allow = $aclDeptAllow;
                $VpnUserGroup->save();
            }
            // dd($request->all());
            ////////// INSERT VPN USER
            if(empty(VpnUser::where('user_id',User::where('name',$request->user_name)->first()->id)->first())){
                $vpnUsername = $request->user_name;
                $vpnUsername = strtolower($vpnUsername);
                $vpnUsername = str_replace(' ','-',$vpnUsername);
                $vpnUsername = explode("-",$vpnUsername);
                $vpnUsername = $aclDept."-".$vpnUsername[0];
                
                $VpnUser = new VpnUser();
                $VpnUser->vpn_user_group_id = VpnUserGroup::where('department_id', Department::where('name',$request->user_department)->first()->id)->first()->id;
                $VpnUser->user_id = User::where('name',$request->user_name)->first()->id;
                $VpnUser->vpn_username = $vpnUsername;
                $VpnUser->no_ticket = $request->ticket;
                if($request->expiry_date != "Permanent" && $request->expiry_date != null)
                    $VpnUser->expiry_date = date('Y-m-d', strtotime("+1 day", strtotime($request->expiry_date)))." 00:00:00";
                else
                    $VpnUser->expiry_date = null;
                $VpnUser->completed = 0;
                $VpnUser->rejected = 0;
                $VpnUser->active = 0;
                $VpnUser->save();
            }

        ////////// INSERT VPN ACL LISTS
        $accessip = array();
        for($i=1; $i<=count($request->txtAccess);$i++){
            $VpnAclList = new VpnAclList();
            $VpnAclList->vpn_user_group_id = VpnUserGroup::where('department_id', Department::where('name',$request->user_department)->first()->id)->first()->id;
            $VpnAclList->address = $request->txtAccess[$i];
            $VpnAclList->completed = 0;
            $VpnAclList->rejected = 0;
            $VpnAclList->active = 0;
            $VpnAclList->save();
            array_push($accessip, $request->txtAccess[$i]);
        }

        $client = new Client([
            'base_uri' => 'https://ithelpdesk.apps.binus.edu/api/v3/',
        ]);

        try{
            $response = $client->request('GET', 'requests/' . $request->ticket,[
                'headers'=>[
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authtoken' => '3BB79015-7E6F-43BF-9EC9-8462F0DACE4C'
                ]
            ]);
            $body = json_decode($response->getBody());
            $email = $body->request->requester->email_id;
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);

                return ['status' => $exception->response_status->status, 'errMsg' => 'Invalid Ticket']; 
            }			
        }

        $directReportsEmail = array(
            // $request->head_email,
            // $request->manager_email
            "klemens.raharja@binus.edu",
            "loudy.owen@binus.edu"
        );

        foreach($directReportsEmail as $key => $value)          
            if(empty($value)) 
                unset($directReportsEmail[$key]); 

        $smtp = new SendEmailController();
        $data = array (
            "email" => $request->user_email, 
            "name" => $request->user_name,
            "subject" => $body->request->subject,
            "number" => $request->ticket,
            "action" => "form_register",
            "countAccess" => count($request->txtAccess),
            "access" => $accessip,
            "binusianid" => $request->binusianid,
            "department" => $request->user_department,
            "directReportsEmail" => $directReportsEmail,
            "expiry_date" => $request->expiry_date

            //BISA PASS YANG LEBIH DETAIL KALAU UDAH ADA, NAMA VPN MISALNYA
        );
        $smtp->send($data);
        return ['status' => 'success', 'succMsg' => 'Registration Success!']; 
    }
    
    public function generateLink(Request $request){
        $validator = Validator::make($request->all(),
        [
    		'number' => 'required|numeric',
        ],
        [
            'number.required' => 'Ticket Number is required!',
            'number.numeric' => 'Ticket Number must be a number!'
        ]
        );

    	if($validator->fails()){
            foreach($validator->errors()->all() as $error){
                return ['status' => 'Validator Fail', 'errMsg' => $error];
            }
    	}

        $ticket = $request->number;

        $client = new Client([
            'base_uri' => 'https://ithelpdesk.apps.binus.edu/api/v3/',
        ]);

        try{
            $response = $client->request('GET', 'requests/' . $ticket,[
                'headers'=>[
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authtoken' => '3BB79015-7E6F-43BF-9EC9-8462F0DACE4C'
                ]
            ]);
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);

                return ['status' => $exception->response_status->status]; 
            }			
        }
        $body = json_decode($response->getBody());
        // return ['status' => 'failed'];  
        
        // return response(["link" => $body->request->requester->email_id,'status' => 'success']);
        //VALIDASI CEK KE DB PUNYA VPN/GA
        //TERUS SMTP
        $ticket = Crypt::encrypt($ticket);
        $url = "http://rc.mikman.beta.binus.local/login/request=" . $ticket;
        if(empty(User::where('email', $body->request->requester->email_id)->first()->email)){
            $smtp = new SendEmailController();
            $data = array (
                "email" => $body->request->requester->email_id, 
                "name" => $body->request->requester->name,
                "subject" => $body->request->subject,
                "number" => $body->request->id,
                "action" => "create",
                "link" => $url,
                "department" => $request->user_department,
                //BISA PASS YANG LEBIH DETAIL KALAU UDAH ADA, NAMA VPN MISALNYA
            );
            $smtp->send($data);

            return response(["link" => $url,'status' => $body->response_status->status]);
        }else{
            // return response(["link" => 'sudah ada di DB BOS!','status' => $body->response_status->status]);
            $smtp = new SendEmailController();
            $data = array (
                "email" => $body->request->requester->email_id, 
                "name" => $body->request->requester->name,
                "subject" => $body->request->subject,
                "number" => $body->request->id,
                "action" => "add_access"
                //BISA PASS YANG LEBIH DETAIL KALAU UDAH ADA, NAMA VPN MISALNYA
            );
            $smtp->send($data);

            return response(["link" => 'udah punya vpn','status' => $body->response_status->status]);
        }
    }

    public function getLink($request){
        try {
            $ticket = Crypt::decrypt($request);
            return view('pages.client.login')->with('ticket',$ticket);
        } catch (DecryptException $e) {
            return view('pages.client.login')->withErrors(['Error Ticket Not Found!']);
        }
    }

    public function checkUser($user){
        // dd($user['ticket']);
        $client = new Client([
            'base_uri' => 'https://ithelpdesk.apps.binus.edu/api/v3/',
        ]);

        try{
            $response = $client->request('GET', 'requests/' . $user['ticket'],[
                'headers'=>[
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authtoken' => '3BB79015-7E6F-43BF-9EC9-8462F0DACE4C'
                ]
            ]);
            $body = json_decode($response->getBody());
            $email = $body->request->requester->email_id;
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);

                return ['status' => $exception->response_status->status]; 
            }			
        }
        if($user['email'] == $email){
            return 'valid';
        }else{
            return 'not valid';
        }
    }

    public function checkLDAPBind($request){
        $ldap_dn = $request->password_name."@binus.edu";
        $ldap_password = $request->password_pwd;
        
        $ldap_con = ldap_connect("10.200.200.201", 389);
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
        
        try {
            if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
                $filter = "(mail=".$ldap_dn.")";
                $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                $entries = ldap_get_entries($ldap_con, $result);
                return 'valid';
            }
        } catch (Exception $e) {
            return 'not valid';
        }
    }

    public function checkLDAPManager($request){
        // $ldap_dn = "CN=Mikrotik Management,OU=Vendor,OU=Data Center,OU=IT,DC=binus,DC=local";
        // $ldap_password ="M1cro-TEECH!!";
        $ldap_dn = $request->password_name."@binus.edu";
        $ldap_password = $request->password_pwd;
        
        $ldap_con = ldap_connect("10.200.200.201", 389);
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
        
        try {
            if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {                
                $filter = "(mail=".$ldap_dn.")";
                $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                $entries = ldap_get_entries($ldap_con, $result);

                $user_name = $entries[0]["cn"][0];
                $user_email = $entries[0]["userprincipalname"][0];
                $user_department = $entries[0]["department"][0];
                $user_title = $entries[0]["title"][0];
                $user_binusianid = $entries[0]["extensionattribute10"][0];
                if(strpos($entries[0]["title"][0], "Manager")){
                    $data = array (
                        "ticket" => $request->ticket,
                        "user_name" => $user_name,
                        "user_email" => $user_email,
                        "user_department" => $user_department,
                        "user_title" => $user_title,
                        "user_binusianid" => $user_binusianid
                    );
                    return $data;
                }
   
                $directReportsName = str_replace("CN=", "", $entries[0]["manager"][0]);
                $directReportsName = substr($directReportsName, 0, strpos($directReportsName, ","));
                $totalDirectReports = 1;
    
                while(!strpos(ldap_get_entries($ldap_con, ldap_search($ldap_con, "dc=binus,dc=local", "(CN=".$directReportsName.")"))[0]["title"][0], "Manager")){
                    $filter = "(CN=".$directReportsName.")";
                    $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                    $entries = ldap_get_entries($ldap_con, $result);

                    // KALAU DIA BOARD DIRECTOR / CEO GIMANA JIR

                    $directReportsTitle = $entries[0]["title"][0];
                    if(strpos($directReportsTitle,"Head")){
                        $head_name = $entries[0]["cn"][0];
                        $head_email = $entries[0]["userprincipalname"][0];
                        $totalDirectReports = 2;
                    }
                    $directReportsManager = $entries[0]["manager"][0];

                    $directReportsName = str_replace("CN=", "", $directReportsManager);
                    $directReportsName = substr($directReportsName, 0, strpos($directReportsName, ","));
                    $directReportsEmail = $entries[0]["userprincipalname"][0];
                }
                
                $filter = "(CN=".$directReportsName.")";
                $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                $entries = ldap_get_entries($ldap_con, $result);
                $manager_name = $directReportsName;
                $manager_email = $entries[0]["userprincipalname"][0];

                if($totalDirectReports == 1){
                    $data = array (
                        "ticket" => $request->ticket,
                        "user_name" => $user_name,
                        "user_email" => $user_email,
                        "user_department" => $user_department,
                        "manager_name" => $manager_name,
                        "manager_email" => $manager_email,
                        "user_binusianid" => $user_binusianid
                    );
                    return $data;
                }else if($totalDirectReports == 2){
                    $data = array (
                        "ticket" => $request->ticket,
                        "user_name" => $user_name,
                        "user_email" => $user_email,
                        "user_department" => $user_department,
                        "head_name" => $head_name,
                        "head_email" => $head_email,
                        "manager_name" => $manager_name,
                        "manager_email" => $manager_email,
                        "user_binusianid" => $user_binusianid
                    );
                    return $data;
                }
            }
        } catch (Exception $e) {
            return back()->withErrors(['Invalid Email / Password!']);
        }
    }

    public function loginEmailLDAP(Request $request){
         if($request->ticket!=null){
            //CEK DULU APAKAH USER yang login pake link ini adalah user yang request?
            $user = array (
                "email" => $request->password_name."@binus.edu", 
                "ticket" => $request->ticket
            );

            // if($this->checkUser($user) != 'valid')
            //     return back()->withErrors(['You do not have permission to view ticket!']);

            if($this->checkLDAPBind($request) != 'valid')
                return back()->withErrors(['Invalid Email / Password!']);
            else
                $data = $this->checkLDAPManager($request);    
            
            $encryptedData = array();
            foreach($data as $key => $value){
                $encryptedValue = Crypt::encrypt($value);
                $encryptedData[$key] = $encryptedValue;
            }
            // dd(Crypt::decrypt($encryptedData['ticket']));

            return view('pages.client.register')->with(array('data' => $data, 'encryptedData' => $encryptedData));
        }else{
            if($this->checkLDAPBind($request) != 'valid')
                return back()->withErrors(['Invalid Email / Password!']);
            else
                $data = $this->checkLDAPManager($request);
            
            $UserId = User::where('email',$request->password_name."@binus.edu")->value('id');
            $userGroupId = VpnUser::where('user_id',$UserId)->value('vpn_user_group_id');
            $addressAllow = VpnAclList::where('vpn_user_group_id',$userGroupId)->pluck('address');
            $vpnUsername = VpnUser::where('user_id',$UserId)->value('vpn_username');
            $status = VpnUser::where('vpn_username',$vpnUsername)->value('completed');
            $noTicket = VpnUser::where('user_id',$UserId)->value('no_ticket');
            $vpnStatus = VpnUser::where('vpn_username',$vpnUsername)->value('expiry_date');
            // dd($status);
            if($status==1){
                return view('pages.client.dashboard')->with(['data'=>$data,'vpnUsername'=>$vpnUsername,'address'=>$addressAllow,'status'=>$status,'vpnStatus'=>$vpnStatus]);
            }else if($status==0){
                return view('pages.client.dashboard')->with(['ticket'=>$noTicket,'managerName'=>$data['manager_name'],'managerEmail'=>$data['manager_email'],'username'=>$data['user_name']]);
            }
            // return redirect()->route('clientDashboard',['data'=>$data,'vpnUsername'=>$vpnUsername,'address'=>$addressAllow]);
        }
    }
}