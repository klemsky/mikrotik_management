<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
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
			#$ldap_con = ldap_connect("202.58.182.103", 389);
			$ldap_con = ldap_connect("10.200.200.201", 389);
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
}
