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
use Illuminate\Support\Str;

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
        
        $dataAll = VpnUser::select('*')
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->where('remote_address','!=','')
        ->get();

        $data = VpnUser::select(['user_id','vpn_username as vpn name','name'])
        ->leftJoin('users','vpn_users.user_id', '=','users.id')
        ->where('remote_address','!=','')
        ->get();

        foreach ($dataAll as $key => $value) {
            $data[$key]['department'] = Department::select('name')->where('id',$dataAll[$key]['department_id'])->first()['name'];
            $data[$key]['group'] = VpnUserGroup::select('acl_group_name')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name'];
            $data[$key]['local address'] = VpnUserGroup::select('local_address')->where('department_id',$dataAll[$key]['department_id'])->first()['local_address'];
            $data[$key]['remote address'] = $dataAll[$key]['remote_address'];
            // $data[$key]['acl_group_name_allow'] = VpnUserGroup::select('acl_group_name_allow')->where('department_id',$dataAll[$key]['department_id'])->first()['acl_group_name_allow'];
            $data[$key]['acl_lists'] = DB::select("SELECT `address`, `no_ticket`, `completed`, `rejected`, `active` FROM vpn_acl_lists WHERE `vpn_user_group_id` = ".$dataAll[$key]['vpn_user_group_id']." ORDER BY INET_ATON(`address`)");
            $data[$key]['status'] = strpos($string, $dataAll[$key]['vpn_username']) ? '<div class="led-green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online</div>' : '<div class="led-red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Offline</div>';
            $data[$key]['active'] = $dataAll[$key]['active'];
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
        if($vpn_user->remote_address == null || $vpn_user->remote_address == "")
            return ['command' => $request->command, 'status' => 'failed', 'errMsg' => 'Please assign the VPN address first!'];
        
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();
        $acl_lists = VpnAclList::where('vpn_user_group_id',$vpn_user->vpn_user_group_id)->where('no_ticket',$form['no_ticket'])->get();
        
        $data = $this->getDetailRequest($form['id']);
        
        $client->sendSync(new RouterOS\Request('/ppp secret add name="'.$vpn_user->vpn_username.'" password="'.Str::random(8).'" service=l2tp profile=default local-address="'.$vpn_user_group->local_address.'" remote-address="'.$vpn_user->remote_address.'"'));

        $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$vpn_user->remote_address.' list='.$vpn_user_group->acl_group_name.''));
        
        foreach ($data['access_list_ticket'] as $key => $value) {
            $client->sendSync(new RouterOS\Request('/ip firewall address-list add address='.$value->address.' list='.$vpn_user_group->acl_group_name_allow.''));
        }

        $filterRule = $client->sendSync(new RouterOS\Request('/ip firewall filter print'));
        $lastRule = count($filterRule) - 2;
        $string = '';
        foreach ($filterRule as $key => $value) {
            $string .= ' '. $filterRule[$key]('src-address-list');
        }
        if(strpos($string, $form['acl_group_name']) == false){
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$vpn_user_group->acl_group_name.' dst-address-list='.$vpn_user_group->acl_group_name_allow.' place-before='.$lastRule.' comment="'.$data['department_name'].' - '.$vpn_user_group->acl_group_name.'"'));
            $client->sendSync(new RouterOS\Request('/ip firewall filter add action=accept chain=forward src-address-list='.$vpn_user_group->acl_group_name_allow.' dst-address-list='.$vpn_user_group->acl_group_name.' place-before='.$lastRule.''));
        }

        if($vpn_user->expiry_date != null || $vpn_user->expiry_date != ""){
            $new_date = date("M/d/Y H:i:s",strtotime($vpn_user->expiry_date));
            $client->sendSync(new RouterOS\Request('/system scheduler add name="'.$vpn_user->vpn_username.'" start-date="'.explode(" ", $new_date)[0].'" start-time="'.explode(" ", $new_date)[1].'" interval="00:00:00" on-event="/ppp secret disable '.$vpn_user->vpn_username.'"'));
        }

        $vpn_user->active = 1;
        foreach ($acl_lists as $key => $value) {
            $acl_lists[$key]->active = 1;
            $acl_lists[$key]->save();
        }
        $vpn_user->save();

        $data = $this->getDetailRequest($form['id']);
        $datas = $this->getAllRequest();

        return [
            'command' => $request->command,
            'status' => 'success',
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

        // Edit VPN Username
        $id = '';
        if($form['vpn_username'] != $vpn_user->vpn_username){
            $printRequest = new RouterOS\Request('/ppp secret print');
            $printRequest->setArgument('.proplist', '.id');
            $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
            $id = $client->sendSync($printRequest)->getProperty('.id');

            $setRequest = new RouterOS\Request('/ppp secret set');
            $setRequest->setArgument('numbers', $id);
            $setRequest->setArgument('name', $form['vpn_username']);
            $client->sendSync($setRequest);

            // Update Scheduler VPN User
            $printRequest = new RouterOS\Request('/system scheduler print');
            $printRequest->setArgument('.proplist', '.id');
            $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
            $id = $client->sendSync($printRequest)->getProperty('.id');

            $setRequest = new RouterOS\Request('/system scheduler set');
            $setRequest->setArgument('numbers', $id);
            $setRequest->setArgument('name', $form['vpn_username']);
            $setRequest->setArgument('on-event', '/ppp secret disable '.$form['vpn_username']);
            $client->sendSync($setRequest);

            $vpn_user->vpn_username = $form['vpn_username'];
        }

        // Edit VPN Address List Group Name
        $id = '';
        if($form['acl_group_name'] != $vpn_user_group->acl_group_name){
            $printRequest = new RouterOS\Request('/ip firewall address-list print');
            $printRequest->setArgument('.proplist', '.id');
            $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name));
            $id = $client->sendSync($printRequest);
            foreach ($id as $key => $value) {
                if($id[$key]('.id') != null && $id[$key]('.id') != ''){
                    $setRequest = new RouterOS\Request('/ip firewall address-list set');
                    $setRequest->setArgument('numbers', $id[$key]('.id'));
                    $setRequest->setArgument('list', $form['acl_group_name']);
                    $client->sendSync($setRequest);
                }
            }

            $vpn_user_group->acl_group_name = $form['acl_group_name'];
        }

        // Edit VPN Address List Group Allow
        $id = '';
        if($form['acl_group_name_allow'] != $vpn_user_group->acl_group_name_allow){
            $printRequest = new RouterOS\Request('/ip firewall address-list print');
            $printRequest->setArgument('.proplist', '.id');
            $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name_allow));
            $id = $client->sendSync($printRequest);
            foreach ($id as $key => $value) {
                if($id[$key]('.id') != null && $id[$key]('.id') != ''){
                    $setRequest = new RouterOS\Request('/ip firewall address-list set');
                    $setRequest->setArgument('numbers', $id[$key]('.id'));
                    $setRequest->setArgument('list', $form['acl_group_name_allow']);
                    $client->sendSync($setRequest);
                }
            }
            $vpn_user_group->acl_group_name_allow = $form['acl_group_name_allow'];
        }

        // Edit VPN Expiry Date
        $id = '';
        if($form['expiry_date'] != $vpn_user->expiry_date){
            if($vpn_user->expiry_date == null || $vpn_user->expiry_date == ""){
                $new_date = date("M/d/Y H:i:s",strtotime($form['expiry_date']));
                $client->sendSync(new RouterOS\Request('/system scheduler add name="'.$vpn_user->vpn_username.'" start-date="'.explode(" ", $new_date)[0].'" start-time="'.explode(" ", $new_date)[1].'" interval="00:00:00" on-event="/ppp secret disable '.$vpn_user->vpn_username.'"'));

                $vpn_user->expiry_date = $form['expiry_date'];
            }
            else if($form['expiry_date'] == "Permanent"){
                $printRequest = new RouterOS\Request('/system scheduler print');
                $printRequest->setArgument('.proplist', '.id');
                $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
                $id = $client->sendSync($printRequest)->getProperty('.id');

                $removeRequest = new RouterOS\Request('/system scheduler remove');
                $removeRequest->setArgument('numbers', $id);
                $client->sendSync($removeRequest);

                $vpn_user->expiry_date = null;
            }
            else{
                $new_date = date("M/d/Y H:i:s",strtotime($form['expiry_date']));
                $printRequest = new RouterOS\Request('/system scheduler print');
                $printRequest->setArgument('.proplist', '.id');
                $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
                $id = $client->sendSync($printRequest)->getProperty('.id');

                $setRequest = new RouterOS\Request('/system scheduler set');
                $setRequest->setArgument('numbers', $id);
                $setRequest->setArgument('start-date', explode(" ", $new_date)[0]);
                $setRequest->setArgument('start-time', explode(" ", $new_date)[1]);
                $client->sendSync($setRequest);
            
                $vpn_user->expiry_date = $form['expiry_date'];
            }
        }

        $vpn_user->save();
        $vpn_user_group->save();
        
        $data = $this->getDetailVPN($form['id']);
        $datas = $this->getAllVPNData($request)['data'];

        return [
            'command' => $request->command,
            'data' => $data,
            'datas' => $datas
        ];
    }

    public function disableVPNMikroTik(Request $request){
        $client = $this->relogin($request->password);
        
        $form = array();
        parse_str($request->form, $form);
        
        $vpn_user = VpnUser::where('id',$form['id'])->first();
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();
        $acl_lists = VpnAclList::where('vpn_user_group_id',$vpn_user->vpn_user_group_id)
        ->where('vpn_user_id',$vpn_user->id)
        ->get();
        
        $addressAllow = array();
        foreach ($acl_lists as $key => $value) 
            array_push($addressAllow, $value->address);
        natsort($addressAllow);

        // Disable VPN Account
        $id = '';
        $printRequest = new RouterOS\Request('/ppp secret print');
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
        $id = $client->sendSync($printRequest)->getProperty('.id');

        $disableRequest = new RouterOS\Request('/ppp secret disable');
        $disableRequest->setArgument('numbers', $id);
        $client->sendSync($disableRequest);

        // Disable VPN Address List Group Name
        $id = '';
        $printRequest = new RouterOS\Request('/ip firewall address-list print');
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name));
        $printRequest->setQuery(RouterOS\Query::where('address', $vpn_user->remote_address));
        $id = $client->sendSync($printRequest)->getProperty('.id');

        $disableRequest = new RouterOS\Request('/ip firewall address-list disable');
        $disableRequest->setArgument('numbers', $id);
        $client->sendSync($disableRequest);

        // Disable VPN Address List Group Allow
        $id = array();;
        $printRequest = new RouterOS\Request('/ip firewall address-list print');
        
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name_allow));
        foreach ($addressAllow as $key => $value) {
            $printRequest->setQuery(RouterOS\Query::where('address', $value));
            array_push($id, $client->sendSync($printRequest)->getProperty('.id'));
        }

        $disableRequest = new RouterOS\Request('/ip firewall address-list disable');
        foreach ($id as $key => $value) {
            $disableRequest->setArgument('numbers', $value);
            $client->sendSync($disableRequest);
            $acl_lists[$key]->active = 2;
            $acl_lists[$key]->save();
        }
        
        $vpn_user->active = 2;
        $vpn_user->save();

        $data = $this->getDetailVPN($form['id']);
        $datas = $this->getAllVPNData($request)['data'];

        return [
            'command' => $request->command,
            'data' => $data,
            'datas' => $datas
        ];
    }

    public function enableVPNMikroTik(Request $request){
        $client = $this->relogin($request->password);
        
        $form = array();
        parse_str($request->form, $form);
        
        $vpn_user = VpnUser::where('id',$form['id'])->first();
        $vpn_user_group = VpnUserGroup::where('department_id',$form['department_id'])->first();
        $acl_lists = VpnAclList::where('vpn_user_group_id',$vpn_user->vpn_user_group_id)
        ->where('vpn_user_id',$vpn_user->id)
        ->get();
        
        $addressAllow = array();
        foreach ($acl_lists as $key => $value) 
            array_push($addressAllow, $value->address);
        natsort($addressAllow);

        // Enable VPN Account
        $id = '';
        $printRequest = new RouterOS\Request('/ppp secret print');
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('name', $vpn_user->vpn_username));
        $id = $client->sendSync($printRequest)->getProperty('.id');

        $enableRequest = new RouterOS\Request('/ppp secret enable');
        $enableRequest->setArgument('numbers', $id);
        $client->sendSync($enableRequest);

        // Enable VPN Address List Group Name
        $id = '';
        $printRequest = new RouterOS\Request('/ip firewall address-list print');
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name));
        $printRequest->setQuery(RouterOS\Query::where('address', $vpn_user->remote_address));
        $id = $client->sendSync($printRequest)->getProperty('.id');

        $enableRequest = new RouterOS\Request('/ip firewall address-list enable');
        $enableRequest->setArgument('numbers', $id);
        $client->sendSync($enableRequest);

        // Enable VPN Address List Group Allow
        $id = array();;
        $printRequest = new RouterOS\Request('/ip firewall address-list print');
        
        $printRequest->setArgument('.proplist', '.id');
        $printRequest->setQuery(RouterOS\Query::where('list', $vpn_user_group->acl_group_name_allow));
        foreach ($addressAllow as $key => $value) {
            $printRequest->setQuery(RouterOS\Query::where('address', $value));
            array_push($id, $client->sendSync($printRequest)->getProperty('.id'));
        }

        $enableRequest = new RouterOS\Request('/ip firewall address-list enable');
        foreach ($id as $key => $value) {
            $enableRequest->setArgument('numbers', $value);
            $client->sendSync($enableRequest);
            $acl_lists[$key]->active = 1;
            $acl_lists[$key]->save();
        }
        
        $vpn_user->active = 1;
        $vpn_user->save();
        
        $data = $this->getDetailVPN($form['id']);
        $datas = $this->getAllVPNData($request)['data'];

        return [
            'command' => $request->command,
            'data' => $data,
            'datas' => $datas
        ];
    }
}