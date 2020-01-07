<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use DB;

// require_once 'PEAR2/Autoload.php';


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

        // $datas = DB::select('select * from userregist ORDER BY ticketNumber ASC');
        // return view('/dashboard',['datas'=>$datas]);
        

        $vpnName = "vpn-it-infrastructure-loudy";  
        $vpnPass = "b1nus123!";
        $department = "infra";

        $client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
        // $client = new RouterOS\Client($request->address, $request->user, $request->password);
        $util = new RouterOS\Util($client);
   
        $util->setMenu('/ip pool');
        
        // MENDAPATKAN RANGES IP POOL
        // $ipPoolRange = $util->get($department,'ranges');
        // $ipFirewallPool = $util->exec('/ip firewall address-list print detail where address in $ipPoolRange');
        // $util->setMenu('/ip firewall address-list');
        // $response = $client->sendSync(new RouterOS\Request('/ip/firewall/address-list/print'));
        // foreach($response as $resp){
        //     if($resp->getType() === RouterOS\Response::TYPE_DATA){
        //         echo 'IP : ',$resp->getProperty('address'),"\n";
        //     }
        // }

        // AMBIL POOL
        $ipPoolRange = $util->get($department,'ranges');

        $util->setMenu('/ip firewall address-list');
        //////////////// AMBIL IP KOSONG DARI IP POOL  
        // IP POOL PER DIVISI -> DATANYA BAKAL KYK GINI
        // $tempPool = "192.168.20.0";

        // ILANGING NOMOR TERAKHIR
        $pool = substr($ipPoolRange,0,-4);

        // DAPATIN SEMUA IP DARI POOL
        for ($i=2; $i<=254;$i++){
            // echo "$pool$i <br>";
            $poolData[]="$pool$i";
        }

        // DAPET SEMUA IP ADDRES DARI FIREWALL
        foreach($util->getAll() as $addr){
            // echo 'IP : ', $addr->getProperty('address'),
            $data[]=$addr->getProperty('address');
        }

        // DAPETIN IP KOSONG DENGAN MEMISAHKAN IP YANG ADA DAN POOL
        $hasil=array_diff($poolData,$data);

        // AMBIL ARRAY PERTAMA
        foreach($hasil as $ip){
            $ipRemote = $ip;
            break;
        }

        // HASIL IP VPN USERNYA
        // print_r($ipRemote);

        // Data diambil dari request yang dikirim lewat tombol
        $name = 'vpn-it-infra-loudy';
        $password = 'infraloudy';
        $localAddr = $pool.'1';

        $util->setMenu('/ppp secret');
    	$util->add(
        array(
            'name' => $name,
            'password' => $password,
            'service' => 'l2tp',
            'local-address' => $localAddr,
            'remote-address' => $ipRemote
            )
        );	
        echo "SUCCESS";
        
        // $util->setMenu('/ip firewall address-list');

        // $util->get('address')
        // $test = $util->find('address')
        // $test = $util->find(0,255);
        // $request = new RouterOS\Request('/ip/pool');
 
        // //Define $query here
        // $query = RouterOS\Query::where('/ip/pool', 'infra');
        // // $query = RouterOS\Query::where (!((address>"192.168.88.10") || address="192.168.88.10") && interface="bridge-local")
        // $request->setQuery($query);
        // $responses = $client->sendSync($request);
        // foreach ($responses as $response) {
        //     foreach ($response as $name => $value) {
        //         echo "{$name}: {$value}\n";
        //     }
        //     echo "====\n";
        // }
        
        

        // dd($test);
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
