<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use GuzzleHttp\Client;

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
    		///////////////////MIKROTIK
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

    		////////////////////////////////////////LDAP
    		$ldap_dn = "CN=Mikrotik Management,OU=Vendor,OU=Data Center,OU=IT,DC=binus,DC=local";
			$ldap_password ="M1cro-TEECH!!";
			
			$ldap_con = ldap_connect("10.200.200.201", 389);
			ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
			
			if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

		 	 	echo "Bind successful!";
			  		
			   	$filter = "(mail=ivan.jsa@binus.edu)";
				$result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
				$entries = ldap_get_entries($ldap_con, $result);
				$department = $entries[0]["department"][0];
				echo $entries[0]["cn"][0] . " is on department of " . $department;

				$name = str_replace("CN=", "", $entries[0]["manager"][0]);
				$name = substr($name, 0, strpos($name, ","));

				// while(!strpos(ldap_get_entries($ldap_con, ldap_search($ldap_con, "dc=binus,dc=local", "(CN=".$name.")"))[0]["title"][0], "Manager")){
				// 	echo $name;
				// 	echo " Not Manager";
				// 	$filter = "(CN=".$name.")";
				// 	$result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
				// 	$entries = ldap_get_entries($ldap_con, $result);
				// 	$name = str_replace("CN=", "", $entries[0]["manager"][0]);
				// 	$name = substr($name, 0, strpos($name, ","));
				// }
				// echo $name . " is Manager";

				// $filter = "(CN=".$name.")";
				// $result = ldap_search($ldap_con, "dc=binus,dc=local", $filter) or exit("Unable to search");
				// $entries = ldap_get_entries($ldap_con, $result);
				// $email = $entries[0]["userprincipalname"][0];
				// echo $email;

				print "<pre>";
				print_r($name);
				// print_r ($entries);
				print "</pre>";
			  
			} else {
				echo "Invalid user/pass or other errors!";
			}

    		/////////////////////////////API ITHELPDESK
			$ch = curl_init();

			// curl_setopt($ch, CURLOPT_URL, "https://ithelpdesk.apps.binus.edu/api/v3/requests/64111"); //GET TICKET DETAIL
			// curl_setopt($ch, CURLOPT_URL, "https://ithelpdesk.apps.binus.edu/api/v3/requests"); // GET ALL TICKETS
			// $client = new Client([
			// 	'base_uri' => 'https://ithelpdesk.apps.binus.edu/api/v3/',
			// ]);

			// $response = $client->request('GET', 'requests/64536',[
			// 	'headers'=>[
			// 		'Content-Type' => 'application/x-www-form-urlencoded',
			// 		'Authtoken' => '3BB79015-7E6F-43BF-9EC9-8462F0DACE4C'
			// 	]
			// ]
			// 	'body'=>[
			// 		'input_data=' => ''
			// 	]
			// );
			// $body = json_decode($response->getBody());
			// dd($body);
			// print "<pre>";
			// print_r($name);
			// print_r ($body);
			// print "</pre>";
			// echo $data['request']['status']['name'];

    		return view('dashboard', compact('dataIP', 'dataLog'));
    	} catch (Exception $e) {

    	}
    }

    public function sendEmail(Request $request){
    	//Validasi
    	// dd($request->all());

		//CEK APAKAH EMAIL BINUS YANG VALID/TIDAK


	    $emails = array();
	    $countRecipients=1;
	    while($countRecipients <= intval($request->countRecipients)){ 
	    	array_push($emails, $request->recipientEmail[$countRecipients]);
			
			$ldap_dn = "CN=Mikrotik Management,OU=Vendor,OU=Data Center,OU=IT,DC=binus,DC=local";
			$ldap_password ="M1cro-TEECH!!";
			$ldap_con = ldap_connect("202.58.182.103", 389);
			ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
			
			if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
				$mailQuery=$emails[$countRecipients-1];
			   	$filter = "(mail=".$mailQuery.")";
				$result = ldap_search($ldap_con, "dc=binus,dc=local", $filter);
				$entries = ldap_get_entries($ldap_con, $result);
				// dd($entries);
				if($entries["count"]==0){
					return "Ga ada";
				}

				if($countRecipients==1){
			    	$data = array(
			    		'name'	=> $entries[0]['cn'][0],
			    		'subject'	=> $request->subject,
			    		'message' => $request->message
			    	);
			    }
		    	// return dd($data);
		    	$countRecipients+=1;

			} else {
				return view('clearview')->with('message', 'Invalid user/pass or other errors!');
			}
	    }
	    // dd($emails);

		// Mail::to($request->recipientEmail1)->send(new SendMail($data));
		Mail::to($emails)->send(new SendMail($data));
    	return view('clearview')->with('message', 'Message sent successfully!');
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
