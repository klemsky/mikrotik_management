<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
use hash;
use PDO;


class ClientController extends Controller
{



	public function registerClient(Request $request){

    $request->all();
    // dd($request);
		// $validate = Validator::make(
  //           $request->all(), 
  //           ['txtFullName' => 'required',
  //           'txtEmail' =>'required',
  //           'txtDivision' => 'required',
  //           'rbTime' => 'required',
  //           'txtAccess1' => 'required',
  //           ]
  //       );
  //   if($validate->fails()){
  //     return redirect()->back()->withInput($request->input)->withErrors($validate);
  //   }else{
      // $userBinus = new User;
      $ticket = $request->txtTicket;
      $username = $request->txtFullName;
      $email = $request->txtEmail;
      $division = $request->txtDivision;
      $status = $request->rbTime;
      $ip = "";
      $i = 1;

      while($request->accessIpCount > 0){
        $request->accessIpCount--;
        $ip .= ($request->accessIpCount == 0) ? ($request->txtAccess[$i]) : ($request->txtAccess[$i].",");
        $i++;
      }

      DB::select('INSERT INTO userregist (ticketNumber,username,email,division,status,ip) VALUES ("'.$ticket.'","'.$username.'","'.$email.'","'.$division.'","'.$status.'","'.$ip.'")');

      return redirect('/dashboard');
    // }
  }

  public function registerVendor(Request $request){
        $validate = Validator::make(
            $request->all(), 
            ['txtFullName' => 'required',
            'txtVendorName' =>'required',
            'rbTime' => 'required',
            'txtAccess1' => 'required',
            ]
        );
    if($validate->fails()){
      return redirect()->back()->withInput($request->input)->withErrors($validate);
    }else{
      return redirect('clientDashboard');
      // ->with($request);
    }
  }
}