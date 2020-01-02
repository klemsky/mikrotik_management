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
        for($i=1; $i<=count($request->txtAccess);$i++){
            $VpnAclList = new VpnAclList();
            $VpnAclList->vpn_user_group_id = VpnUserGroup::where('department_id', Department::where('name',$request->user_department)->first()->id)->first()->id;
            $VpnAclList->address = $request->txtAccess[$i];
            $VpnAclList->completed = 0;
            $VpnAclList->rejected = 0;
            $VpnAclList->active = 0;
            $VpnAclList->save();
        }

        return redirect('/clientDashboard');
    }

    public function generateLink(Request $request){
        $ticket = $request->number;

        if($ticket == null){
            return $response = ['status' => 'Ticket Empty'];
        }

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
            $body = json_decode($response->getBody());
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);

                return ['status' => $exception->response_status->status]; 
            }			
        }
        
        // return response(["link" => $body->request->requester->email_id,'status' => 'success']);
        //VALIDASI CEK KE DB PUNYA VPN/GA
        //TERUS SMTP

        $ticket = Crypt::encrypt($ticket);
        $url = "http://lo.mikman.beta.binus.local/login/request=" . $ticket;
        return response(["link" => $url,'status' => $body->response_status->status]);
    }

    public function getLink($request){
        try {
            $ticket = Crypt::decrypt($request);
            return view('pages.client.login')->with('ticket',$ticket);
        } catch (DecryptException $e) {
            echo 'Ticket number invalid!';
        }
    }

    public function loginEmailLDAP(Request $request){
        ////////////////////////////////////////LDAP
        // $ldap_dn = "CN=Mikrotik Management,OU=Vendor,OU=Data Center,OU=IT,DC=binus,DC=local";
        // // $ldap_password ="M1cro-TEECH!!";
        // dd($request->ticket);
        $ldap_dn = $request->password_name."@binus.edu";
        $ldap_password = $request->password_pwd;
        
        $ldap_con = ldap_connect("10.200.200.201", 389);
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
        
        if($request->ticket==null){
            $user = User::where("email",$ldap_dn)->first();
            if(empty($user))
                return back()->withErrors(["You dont have VPN Account!"]);
            try {
                if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {     
                    $filter = "(mail=".$request->password_name."@binus.edu)";
                    $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                    $entries = ldap_get_entries($ldap_con, $result); 
                    $user_name = $entries[0]["cn"][0];
                    $user_email = $entries[0]["userprincipalname"][0];
                    $user_department = $entries[0]["department"][0];
                    $manager_name = str_replace("CN=", "", $entries[0]["manager"][0]);
                    $manager_name = substr($manager_name, 0, strpos($manager_name, ","));
                    while(!strpos(ldap_get_entries($ldap_con, ldap_search($ldap_con, "dc=binus,dc=local", "(CN=".$manager_name.")"))[0]["title"][0], "Manager")){
                        $filter = "(CN=".$manager_name.")";
                        $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                        $entries = ldap_get_entries($ldap_con, $result);
                        $manager_name = str_replace("CN=", "", $entries[0]["manager"][0]);
                        $manager_name = substr($manager_name, 0, strpos($manager_name, ","));
                        $manager_email = $entries[0]["userprincipalname"][0];
                    }
                    $filter = "(CN=".$manager_name.")";
                    $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                    $entries = ldap_get_entries($ldap_con, $result);
                    $manager_email = $entries[0]["userprincipalname"][0];
                    // AMBIL DATA DARI DB
                    $UserId = User::where('email',$ldap_dn)->value('id');
                    $userGroupId = VpnUser::where('user_id',$UserId)->value('vpn_user_group_id');
                    $addressAllow = VpnAclList::where('vpn_user_group_id',$userGroupId)->pluck('address');
                    $vpnUsername = VpnUser::where('user_id',$UserId)->value('vpn_username');
                    $data["ticket"] = $request->ticket;
                    $data["user_name"] = $user_name;
                    $data["user_email"] = $user_email;
                    $data["user_department"] = $user_department;
                    $data["manager_name"] = $manager_name;
                    $data["manager_email"] = $manager_email;
                    $data["vpnUsername"] = $vpnUsername;
                    // return view('pages.client.dashboard')->with(['vpnUsername'=>$vpnUsername,'name'=>$request->password_name,'email'=>$ldap_dn,'department'=>$request->user_department,'manager'=>$request->manager_name,'address'=>$addressAllow]);
                    return view('pages.client.dashboard')->with(['data'=>$data,'address'=>$addressAllow]);

                    // $vpnAclTiket = VpnUser::where($vpnUsername)->pluck('no_ticket');
                    // // Bandingin hasil Array dari $vpnAclAllow dengan table no_ticket pake whereRaw
                    // $vpnAclAllow = VpnAclList::whereRaw('no_ticket',$vpnAclTiket)->pluck('address')->toArray();          
                    // return view('pages.client.dashboard');
                }
            } catch (Exception $e) {
                return back()->withErrors(['Invalid Email / Password!']);
            }
        }else{
            try {
                if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {                
                    $filter = "(mail=".$request->password_name."@binus.edu)";
                    $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                    $entries = ldap_get_entries($ldap_con, $result);

                    $user_name = $entries[0]["cn"][0];
                    $user_email = $entries[0]["userprincipalname"][0];
                    $user_department = $entries[0]["department"][0];
                    // echo $user_name . " is on department of " . $user_department . ". Email: " . $user_email . "<br>";
        
                    $manager_name = str_replace("CN=", "", $entries[0]["manager"][0]);
                    $manager_name = substr($manager_name, 0, strpos($manager_name, ","));
        
                    while(!strpos(ldap_get_entries($ldap_con, ldap_search($ldap_con, "dc=binus,dc=local", "(CN=".$manager_name.")"))[0]["title"][0], "Manager")){
                        // echo $manager_name . " is not Manager";
                        $filter = "(CN=".$manager_name.")";
                        $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                        $entries = ldap_get_entries($ldap_con, $result);
                        $manager_name = str_replace("CN=", "", $entries[0]["manager"][0]);
                        $manager_name = substr($manager_name, 0, strpos($manager_name, ","));
                        $manager_email = $entries[0]["userprincipalname"][0];
                        // echo  ". Email: " . $manager_email . "<br>";
                    }
                    // echo $manager_name . " is Manager";
                    
                    $filter = "(CN=".$manager_name.")";
                    $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
                    $entries = ldap_get_entries($ldap_con, $result);
                    $manager_email = $entries[0]["userprincipalname"][0];
                    // echo  ". Email: " . $manager_email . "<br>";
        
                    // print "<pre>";
                    // print_r ($entries);
                    // print "</pre>";
        
                    $data["ticket"] = $request->ticket;
                    $data["user_name"] = $user_name;
                    $data["user_email"] = $user_email;
                    $data["user_department"] = $user_department;
                    $data["manager_name"] = $manager_name;
                    $data["manager_email"] = $manager_email;

                    
        
                    return view('pages.client.register')->with(['data'=> $data]);
                }
            } catch (Exception $e) {
                return back()->withErrors(['Invalid Email / Password!']);
            }
        }
        
    }
}
