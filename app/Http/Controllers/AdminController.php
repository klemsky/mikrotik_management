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
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AdminController extends Controller
{
    public function getRequestVPN(){
	    return view('pages.admin.dashboard');
    }

    public function getAllData(Request $request){
        // $data = VpnAclList::all();
        $data = VpnUser::select(['no_ticket','vpn_username','email','name'])->leftJoin('users',function($join) {
            $join->on('users.id', '=', 'vpn_users.user_id');
        })->get();

        foreach ($data as $key => $value) 
            $data[$key]['status'] = $this->checkTicketStatus($data[$key]['no_ticket']);

        // dd($data);
        return response([
            'data' => $data,
        ]);
    }

    public function checkTicketStatus($ticket){
        $status = '';
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
            return $body->request->status->name;
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string) $e->getResponse()->getBody();
                $exception = json_decode($exception);
                return ['status' => $exception->response_status->status]; 
            }			
        }

        return $status;
    }

	public function reLogin(Request $request){
		if($request->command == "VPN Status")
			return $this->showAllVPN($request);
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
}
