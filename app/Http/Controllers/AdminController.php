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
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Exception;
use DB;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use PEAR2\Net\RouterOS\Exception as RouterOSException;
use PEAR2\Net\RouterOS\SocketException;
use PEAR2\Net\Transmitter\Exception as TransmitterException;

class AdminController extends Controller
{
    public function getRequestVPN(){
	    return view('pages.admin.dashboard');
    }

    public function getAllRequest(){
        $dataAll = VpnUser::select('*')
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->get();
        
        $data = VpnUser::select(['user_id','no_ticket as ticket','vpn_username as vpn name','email','name'])
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->get();

        foreach ($dataAll as $key => $value) {
            $data[$key]['department'] = Department::select('name')->where('id',$dataAll[$key]['department_id'])->first()['name'];
            $data[$key]['group'] = VpnUserGroup::select('acl_group_name')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name'];
            $data[$key]['group allow'] = VpnUserGroup::select('acl_group_name_allow')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name_allow'];
        }

        // $client = new Client([
        //     'base_uri' => 'https://ithelpdesk.apps.binus.edu/api/v3/',
        // ]);

        // foreach ($data as $key => $value) 
        //     $data[$key]['status'] = $this->checkTicketStatus($client,$data[$key]['no_ticket']);

        return $data;
    }

    public function getAllVPNData(Request $request){
        $client = $this->relogin($request->password);

        $string = '';
        $dataInt = $client->sendSync(new RouterOS\Request('/interface print'));
        foreach ($dataInt as $key => $value) {
            $string .= ' ' . $dataInt[$key]('name');
        }
        $dataPPP = $client->sendSync(new RouterOS\Request('/ppp secret print'));
        
        $dataAll = VpnUser::select('*')
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->get();

        $data = VpnUser::select(['user_id','vpn_username as vpn name','name'])
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->get();

        foreach ($dataAll as $key => $value) {
            $data[$key]['department'] = Department::select('name')->where('id',$dataAll[$key]['department_id'])->first()['name'];
            $data[$key]['group'] = VpnUserGroup::select('acl_group_name')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name'];
            $data[$key]['local address'] = VpnUserGroup::select('local_address')->where('department_id',$dataAll[$key]['department_id'])->first()['local_address'];
            $data[$key]['remote address'] = $dataAll[$key]['remote_address'];
            // $data[$key]['acl_group_name_allow'] = VpnUserGroup::select('acl_group_name_allow')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name_allow'];
            $data[$key]['acl_lists'] = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `vpn_user_group_id` = ".$dataAll[$key]['vpn_user_group_id']." ORDER BY INET_ATON(`address`)");
            $data[$key]['status'] = strpos($string, $dataAll[$key]['vpn_username']) ? '<div class="led-green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online</div>' : '<div class="led-red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Offline</div>';
        }

        return [
            'command' => $request->command,
            'data' => $data
        ];
    }

    public function getDetailRequest($id){
        $data = VpnUser::select(['vpn_users.id','name','email','vpn_username','expiry_date','acl_group_name','local_address','remote_address','acl_group_name_allow','no_ticket','vpn_user_groups.department_id','vpn_user_groups.id as vpn_user_group_id','completed','rejected','active'])
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->leftJoin('vpn_user_groups','vpn_users.vpn_user_group_id','=','vpn_user_groups.id')
        ->where('user_id',$id)
        ->first();

        $data['department_name'] = Department::where('id',$data['department_id'])->first()['name'];
        
        $acllist = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `vpn_user_group_id` = ".$data['vpn_user_group_id']." ORDER BY INET_ATON(`address`)");
        $acllistTicket = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `no_ticket` = ".$data['no_ticket']." ORDER BY INET_ATON(`address`)");
        $data['access_list_dept'] = $acllist;
        $data['access_list_ticket'] = $acllistTicket;

        return $data;
    }

    public function getDetailVPN($id){
        $data = VpnUser::select(['vpn_users.id','name','email','vpn_username','expiry_date','acl_group_name','local_address','remote_address','acl_group_name_allow','no_ticket','vpn_user_groups.department_id','vpn_user_groups.id as vpn_user_group_id','completed','rejected','active'])
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->leftJoin('vpn_user_groups','vpn_users.vpn_user_group_id','=','vpn_user_groups.id')
        ->where('user_id',$id)
        ->first();

        $data['department_name'] = Department::where('id',$data['department_id'])->first()['name'];
        
        $acllist = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `vpn_user_group_id` = ".$data['vpn_user_group_id']." ORDER BY INET_ATON(`address`)");
        $acllistTicket = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `no_ticket` = ".$data['no_ticket']." ORDER BY INET_ATON(`address`)");
        $data['access_list_dept'] = $acllist;
        $data['access_list_ticket'] = $acllistTicket;

        return $data;
    }

    public function checkTicketStatus($client,$ticket){
        $response = $client->request('GET', 'requests/' . $ticket,[
            'headers'=>[
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authtoken' => '3BB79015-7E6F-43BF-9EC9-8462F0DACE4C'
            ]
        ]);
        $body = json_decode($response->getBody());
        return $body->request->status->name;
    }

    public function showAllVPN(Request $request){
    	try {
            $client = new RouterOS\Client(session::get("address"),session::get("username"),$request->password);
            $util = new RouterOS\Util($client);

            $data = array();
            $dataVPN = $client->sendSync(new RouterOS\Request('/ppp secret print'));

            $VPN_name = array();
            $VPN_service = array();
            $VPN_profile = array();
            $VPN_localAddr = array();
            $VPN_remoteAddr = array();
            $VPN_lastLogout = array();
            $VPN_disabled = array();

            for ($i = 0; $i < count($dataVPN) - 1; $i++) {
            	array_push($VPN_name, $dataVPN[$i]('name'));
            	array_push($VPN_service, $dataVPN[$i]('service'));
            	array_push($VPN_profile, $dataVPN[$i]('profile'));
            	array_push($VPN_localAddr, $dataVPN[$i]('local-address'));
            	array_push($VPN_remoteAddr, $dataVPN[$i]('remote-address'));
            	array_push($VPN_lastLogout, $dataVPN[$i]('last-logged-out'));
            	array_push($VPN_disabled, $dataVPN[$i]('disabled'));
            }

            $data["name"] = $VPN_name;
            $data["service"] = $VPN_service;
            $data["profile"] = $VPN_profile;
            $data["local-address"] = $VPN_localAddr;
            $data["remote-address"] = $VPN_remoteAddr;
            $data["last-logged-out"] = $VPN_lastLogout;
            $data["disabled"] = $VPN_disabled;

            session::put('util', $util);

            return response([
            	'data' => $data,
            ]);
        }catch(Exception $e){
            echo "Login Error";
        }
    }

    public function relogin($password){
        try {
            $client = new RouterOS\Client(session::get('address'), session::get('username'), $password);
            // $util = new RouterOS\Util($client);

            // $datas = $util->setMenu('/log')->getAll(); 
            // $datas = $client->sendSync(new RouterOS\Request('/ppp secret print'));

            return $client;
        }catch(SocketException $e){
            return $e;
        }
    }

    public function assignAddressVPN(Request $request){
        $client = $this->relogin($request->password);
        $dataPPP = $client->sendSync(new RouterOS\Request('/ppp secret print'));
        
        $form = array();
        parse_str($request->form, $form);
        
        $local_address = array();
        $remote_address = array();
        foreach ($dataPPP as $key => $value) {
            array_push($local_address,$dataPPP[$key]('local-address'));
            array_push($remote_address,$dataPPP[$key]('remote-address'));
        }
        
        $vpn_user = VpnUser::where('id',$form['id'])->first();
        $vpn_users = VpnUser::all();
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();
        $vpn_user_groups = VpnUserGroup::all();

        // GET LOCAL ADDRESS FROM DB
        $vpn_user_groups_local_address = array();
        foreach ($vpn_user_groups as $key => $value) {
            if($vpn_user_groups[$key]['local_address'] != null && $vpn_user_groups[$key]['local_address'] != "")
                array_push($vpn_user_groups_local_address,$vpn_user_groups[$key]['local_address']);
        }

        // GET REMOTE ADDRESS FROM DB
        $vpn_users_remote_address = array();
        foreach ($vpn_users as $key => $value) {
            if($vpn_users[$key]['remote_address'] != null && $vpn_users[$key]['remote_address'] != "")
                array_push($vpn_users_remote_address,$vpn_users[$key]['remote_address']);
        }

        natsort($local_address);
        natsort($remote_address);
        natsort($vpn_user_groups_local_address);
        natsort($vpn_users_remote_address);
        
        //FOR EACH SEARCHING AVAILABLE LOCAL_ADDRESS
        $local_address_vpn = 0;
        $local_address_vpn_db = 0;
        if($form['local_address'] == null || $form['local_address'] == ""){
            //CEK AVAILABLE LOCAL_ADDRESS MIKROTIK
            foreach ($local_address as $key => $value) {
                if($value != null){
                    if(explode('.',$value)[0] == "10"){
                        if($local_address_vpn == 0){
                            $local_address_vpn = intval(explode('.',$value)[2]);
                        }
                        else{
                            if($local_address_vpn + 1 < intval(explode('.',$value)[2])){
                                break;
                            }
                            else{
                                $local_address_vpn = intval(explode('.',$value)[2]);
                            }
                        }
                    }
                }
            }
            $local_address_vpn = $local_address_vpn + 1;
            //CEK AVAILABLE LOCAL_ADDRESS DB
            foreach ($vpn_user_groups_local_address as $key => $value) {
                if($value != null){
                    if(explode('.',$value)[0] == "10"){
                        if($local_address_vpn_db == 0){
                            $local_address_vpn_db = intval(explode('.',$value)[2]);
                        }
                        else{
                            if($local_address_vpn_db + 1 < intval(explode('.',$value)[2])){
                                break;
                            }
                            else{
                                $local_address_vpn_db = intval(explode('.',$value)[2]);
                            }
                        }
                    }
                }
            }
            $local_address_vpn_db = $local_address_vpn_db + 1;
        }
        else{
            $local_address_vpn = intval(explode('.',$form['local_address'])[2]);
        }
        $local_address_vpn = ($local_address_vpn >= $local_address_vpn_db) ? $local_address_vpn : $local_address_vpn_db;
        // dd($local_address_vpn);

        //FOR EACH SEARCHING AVAILABLE REMOTE_ADDRESS
        $remote_address_vpn = 2;
        $remote_address_vpn_db = 2;
        if($form['local_address'] != null && $form['local_address'] != "" && ($form['remote_address'] == null || $form['remote_address'] == "")){
            if(explode('.',$form['local_address'])[2] == $local_address_vpn){
                //CEK AVAILABLE REMOTE_ADDRESS MIKROTIK
                foreach ($remote_address as $key => $value) {
                    if($value != null){
                        if(explode('.',$value)[0] == "10"){
                            // if($remote_address_vpn != 2 && $remote_address_vpn + 1 != intval(explode('.',$value)[3])){
                            //     break;
                            // }
                            if(explode('.',$value)[2] == $local_address_vpn){
                                $remote_address_vpn = intval(explode('.',$value)[3]);
                            }
                        }
                    }
                }
                $remote_address_vpn = $remote_address_vpn + 1;
                //CEK AVAILABLE REMOTE_ADDRESS DB
                foreach ($vpn_users_remote_address as $key => $value) {
                    if($value != null){
                        if(explode('.',$value)[0] == "10"){
                            // if($remote_address_vpn_db != 2 && $remote_address_vpn_db + 1 != intval(explode('.',$value)[3])){
                            //     break;
                            // }
                            if(explode('.',$value)[2] == $local_address_vpn){
                                $remote_address_vpn_db = intval(explode('.',$value)[3]);
                            }
                        }
                    }
                }
                $remote_address_vpn_db = $remote_address_vpn_db + 1;
                $remote_address_vpn = ($remote_address_vpn >= $remote_address_vpn_db) ? $remote_address_vpn : $remote_address_vpn_db;
            }
        }
        $remote_address_vpn = "10.18." . $local_address_vpn . "." . $remote_address_vpn;
        $local_address_vpn = "10.18." . $local_address_vpn . ".1";

        if($vpn_user['vpn_username'] != $form['vpn_username'])
            $vpn_user->vpn_username = $form['vpn_username'];
        if($vpn_user_group['acl_group_name'] != $form['acl_group_name'] && ($vpn_user_group['local_address'] == null || $vpn_user_group['local_address'] == ""))
            $vpn_user_group->acl_group_name = $form['acl_group_name'];
        if($vpn_user_group['acl_group_name_allow'] != $form['acl_group_name_allow'] && ($vpn_user_group['local_address'] == null || $vpn_user_group['local_address'] == ""))
            $vpn_user_group->acl_group_name_allow = $form['acl_group_name_allow'];
        $vpn_user->remote_address = $remote_address_vpn;
        $vpn_user_group->local_address = $local_address_vpn;
        $vpn_user->save();
        $vpn_user_group->save();
        
        $data = $this->getDetailRequest($form['id']);
        $datas = $this->getAllRequest();

        return [
            'command' => $request->command,
            'data' => $data,
            'datas' => $datas
        ];
    }

    public function createVPNMikroTik(Request $request){
        //RE-LOGIN MIKROTIK
        $client = $this->relogin($request->password);
        
        $form = array();
        parse_str($request->form, $form);
        
        $vpn_user = VpnUser::where('id',$form['id'])->first();
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();
        $acl_lists = VpnAclList::where('vpn_user_group_id',$form['vpn_user_group_id'])->where('no_ticket',$form['no_ticket'])->get();
        $new_date = date("M/d/Y H:i:s",strtotime($vpn_user->expiry_date));

        if($vpn_user->vpn_username != $form['vpn_username'])
            $vpn_user->vpn_username = $form['vpn_username'];
        if($vpn_user->remote_address != $form['remote_address'])
            $vpn_user->remote_address = $form['remote_address'];
        if($vpn_user_group->local_address != $form['local_address'])
            $vpn_user_group->local_address = $form['local_address'];

        $vpn_user->active = 1;
        foreach ($acl_lists as $key => $value) {
            $acl_lists[$key]->active = 1;
            $acl_lists[$key]->save();
        }
        
        $data = $this->getDetailRequest($form['id']);
        
        $client->sendSync(new RouterOS\Request('/ppp secret add name="'.$form['vpn_username'].'" password="binus123" service=l2tp profile=default local-address="'.$form['local_address'].'" remote-address="'.$form['remote_address'].'"'));

        $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$form['remote_address'].' list='.$vpn_user_group->acl_group_name.''));
        
        foreach ($data['access_list_ticket'] as $key => $value) {
            $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$value->address.' list='.$vpn_user_group->acl_group_name_allow.''));
            // if(strpos($addAddrListAllow[0]('message') , 'failure') == 0)
            //     return ['command' => $request->command,'message' => $addAddrListAllow[0]('message') . ' Address List Allow : ' . $value->address];
        }

        // if(strpos($userPPP[0]('message') , 'failure') == 0)
        //     return ['command' => $request->command,'message' => $userPPP[0]('message') . ' Secret'];
   
        // if(strpos($addAddrList[0]('message') , 'failure') == 0)
        //     return ['command' => $request->command,'message' => $addAddrList[0]('message') . ' Address List'];

        $filterRule = $client->sendSync(new RouterOS\Request('/ip firewall filter print'));
        $lastRule = count($filterRule) - 2;
        $string = '';
        foreach ($filterRule as $key => $value) {
            $string .= ' '. $filterRule[$key]('src-address-list');
        }
        if(strpos($string, $form['acl_group_name']) == false){
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$form['acl_group_name'].' dst-address-list='.$form['acl_group_name_allow'].' place-before='.$lastRule.' comment="'.$form['department_name'].' - '.$form['acl_group_name'].'"'));
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$form['acl_group_name_allow'].' dst-address-list='.$form['acl_group_name'].' place-before='.$lastRule.''));
        }

        $client->sendSync(new RouterOS\Request('/system scheduler add name="'.$form['vpn_username'].'" start-date="'.explode(" ", $new_date)[0].'" start-time="'.explode(" ", $new_date)[1].'" interval="00:00:00" on-event="/ppp secret disable '.$form['vpn_username'].'"'));
        $vpn_user->save();
        $vpn_user_group->save();

        $data = $this->getDetailRequest($form['id']);
        $datas = $this->getAllRequest();

        return [
            'command' => $request->command,
            'data' => $data,
            'datas' => $datas
        ];
    }

    public function editVPNMikroTik(Request $request){
        //RE-LOGIN MIKROTIK
        $client = $this->relogin($request->password);
        
        $form = array();
        parse_str($request->form, $form);
        $vpn_user = VpnUser::where('id',$form['id'])->first();
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();

        $data = $this->getDetailRequest($form['id']);
        
        $client->sendSync(new RouterOS\Request('/ppp secret add name="'.$form['vpn_username'].'" password="binus123" service=l2tp profile=default local-address="'.$form['local_address'].'" remote-address="'.$form['remote_address'].'"'));

        $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$form['remote_address'].' list='.$form['acl_group_name'].''));
        
        foreach ($data['access_list_ticket'] as $key => $value) {
            $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$value->address.' list='.$form['acl_group_name_allow'].''));
            // if(strpos($addAddrListAllow[0]('message') , 'failure') == 0)
            //     return ['command' => $request->command,'message' => $addAddrListAllow[0]('message') . ' Address List Allow : ' . $value->address];
        }

        // if(strpos($userPPP[0]('message') , 'failure') == 0)
        //     return ['command' => $request->command,'message' => $userPPP[0]('message') . ' Secret'];
   
        // if(strpos($addAddrList[0]('message') , 'failure') == 0)
        //     return ['command' => $request->command,'message' => $addAddrList[0]('message') . ' Address List'];

        $filterRule = $client->sendSync(new RouterOS\Request('/ip firewall filter print'));
        $lastRule = count($filterRule) - 2;
        $string = '';
        foreach ($filterRule as $key => $value) {
            $string .= ' '. $filterRule[$key]('src-address-list');
        }
        if(strpos($string, $form['acl_group_name']) == false){
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$form['acl_group_name'].' dst-address-list='.$form['acl_group_name_allow'].' place-before='.$lastRule.' comment="'.$form['department_name'].' - '.$form['acl_group_name'].'"'));
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$form['acl_group_name_allow'].' dst-address-list='.$form['acl_group_name'].' place-before='.$lastRule.''));
        }
    }
}