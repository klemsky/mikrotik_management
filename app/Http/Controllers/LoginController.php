<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;

class LoginController extends Controller
{
    public function login(Request $request){
    	try {
    		$client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
    		$util = new RouterOS\Util($client);
    		// $datas = $util->setMenu('/log')->getAll();
		// $datas = $util->setMenu('/log')->getAll();
    		// $datas = $client->sendSync(new RouterOS\Request('/ip address print'));

    		// return view('dashboard', compact('util'));
    	} catch (Exception $e) {
    		// return redirect()->back()->with('error',$e);
    	}
    }
}
