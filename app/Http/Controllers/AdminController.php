<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class AdminController extends Controller
{
	public function reLogin(Request $request){
		if($request->command == "showAllVPN")
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
