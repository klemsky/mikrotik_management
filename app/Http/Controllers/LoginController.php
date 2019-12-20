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
    	

    	try {
    		
    		$util = new RouterOS\Util(
    			$client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!')
    		);
    		session(['address' => '10.21.0.234']);
    		session(['user' => 'admin']);
    		session(['password' => 'mikman123!']);


    		//GET IP
    		$dataIP = $util->setMenu('/ip address')->getAll();

    		//GET LOG
    		$dataLog = $util->setMenu('/log')->getAll();

    		//LDAP
			// $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
			// $ldap_password = "password";
			
			// $ldap_con = ldap_connect("ldap.forumsys.com");
			
			// ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
			
			// if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

			//   echo "Bind successful!";
			//    $filter = "(uid=newton)";
			// 	$result = ldap_search($ldap_con, "dc=example,dc=com", $filter) or exit("Unable to search");
			// 	$entries = ldap_get_entries($ldap_con, $result);

			// 	print "<pre>";
			// 	print_r ($entries);
			// 	print "</pre>";
			  
			// } else {
			// 	echo "Invalid user/pass or other errors!";
			// }


    		$ldap_dn = "CN=Richie Muliawan,OU=NonPolicyLicense,OU=IT,DC=binus,DC=local";
			$ldap_password = "";
			
			$ldap_con = ldap_connect("ldap.binus.edu");
			
			ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
			
			if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

		  		echo "Bind successful!";
			  		
			   	$filter = "(cn=Kris Saputra)";
				$result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
				$entries = ldap_get_entries($ldap_con, $result);

				print "<pre>";
				print_r ($entries);
				print "</pre>";
			  
			} else {
				echo "Invalid user/pass or other errors!";
			}

    		return view('dashboard', compact('dataIP', 'dataLog'));
    	} catch (Exception $e) {

    	}
    }















    public function getIP(Request $request){
		$address = session('address');
		$user = session('user');
		$password = session('password');

		$util = new RouterOS\Util(
			$client = new RouterOS\Client($address, $user, $password)
		);

		$datas = $util->setMenu('/ip address')->getAll();
		// foreach ($util->getAll() as $item) {
		//     echo 'IP: ', $item->getProperty('address'),
		//          ' MAC: ', $item->getProperty('mac-address'),
		//          "\n";
		// }

		return view('dashboard', compact('datas'));
    }

    public function getLog(Request $request){
    	// dd($request->all());

    	$newutil = $request->serialized;
    	var_dump($newutil);

    	
    }
}
