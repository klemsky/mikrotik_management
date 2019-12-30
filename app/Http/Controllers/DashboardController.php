<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use DB;


class DashboardController extends Controller
{


    // public function index(){
    //     $datas = Data::all()->toArray();
    //     return view('/dashboard',compact('varname'))
    // }
    public function createAccount(Request $request){
        $username = $request->username;
        $division = $request->division;
        $status = $request->status;
        $ip = $request->ip;
        $client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
        // $client = new RouterOS\Client($request->address, $request->user, $request->password);


        
    }

    public function dashboard(Request $request){

    	
    	//variable testing buat add IP, Secret sama Script
    	// $addrTest = '8.8.8.8';
    	// $secretVPN = 'VPN-YANDO';
    	// $scriptVPN = 'ORA-UMUM';

        $datas = DB::select('select * from userregist ORDER BY ticketNumber ASC');
        return view('/dashboard',['datas'=>$datas]);


        $client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
        $client = new RouterOS\Client($request->address, $request->user, $request->password);

        // DB::select('INSERT INTO userregist (username,email,division,status,ip) VALUES ("'.$username.'","'.$email.'","'.$division.'","'.$status.'","'.$ip.'")');
        // return view();
       //  if(Session::get('key')){
       //  		session::get('key');
    			// $value = $request->session()->get('key','data');
    			// foreach ($value as $values) {
    			// 	$client = new RouterOS\Client($values[0],$values[1],$values[2]);
    			// }
       //          $util = new RouterOS\Util($client);
       //          foreach ($value as $values) {
       //          	echo "Success login with user : {$values[1]} ";
       //          	echo "and password : {$values[2]}";
       //          }
                
                





            // try {
            // 	//add IP
            // 	$util->setMenu('/ip address');
            // 	if($util->find('address' != $addrTest)){
            // 		$util->add(
	           //      array(
	           //          'address' => $addrTest,
	           //          'interface' => 'ether7'
	           //          )     
            //     	);
            // 	}else{
            // 		echo "{$addrTest} Already added";
            // 	}
                
            //     //add secret
            //     $util->setMenu('/ppp secret');
            //     $util->find('name'!=$secretVPN){
            //     	$util->add(
            //         array(
            //             'name' => $secretVPN,
            //             'password' => 'YandiNgeyel!',
            //             'service' => 'l2tp',
            //             'local-address' => '192.168.1.1',
            //             'remote-address' => '192.168.1.12'
            //             )
            //     	);	
            //     }else{
            // 		echo "{$secretVPN} Already added";
            // 	}
            	
            //     //add script
           	// 	$util->setMenu('/system script');
           	// 	$util->find('name'!=$scriptVPN){
           	// 		$util->add(
            //         array(
            //             'name' => $scriptVPN,
            //             'source' => "/ppp secret remove VPN-YANDO"
            //             )
            //     	);
           	// 	}else{
            // 		echo "{$scriptVPN} Already added";
            // 	}
            	
            // 	echo "Success add Adding \r \n IP>Address : {$addrTest} \r \n PPP>Secret Name : {$secretVPN} \r \n System>script : {$scriptVPN}";
 



        //     }catch (Error $e) {
        //         echo "Already added or error";
        //     }
           
        // }else{
        //     echo "Fail";
        // }
        




     	// return view('/dashboard');
    	// dd($request->util);
    	// $util = $request->util;
		// $logs = $util->setMenu('/log')->getAll();
		

    	//return view('dashboard', compact($logs));
    }
}
