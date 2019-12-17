<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginDepre(Request $request){
    	try {
    		$client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
    		$util = new RouterOS\Util($client);
   //  		$datas = $util->setMenu('/log')->getAll();
	// $datas = $util->setMenu('/log')->getAll();
   //  		$datas = $client->sendSync(new RouterOS\Request('/ip address print'));

    		return view('dashboard', compact('util'));
    	} catch (Exception $e) {
    		// return redirect()->back()->with('error',$e);
    	}
    }

    public function messages(){
    	return[
    		'address.required' => 'IP address is required!',
    		'address.ipv4' => 'IP address must be a valid IPv4 Address!',
    		'user.required'	=> 'Username is required!',
    		'password.required' => 'Password is required!',
    	];
    }


    public function login(Request $request){
    	$validator = Validator::make($request->all(), [
    		'address' => 'required|ipv4',
    		'user' => 'required',
    		'password' => 'required',
    	]);

    	if($validator->fails()){
    		return back()->withErrors($validator)->withInput();
    	}
    	return 'Hai :)';
    }
}
