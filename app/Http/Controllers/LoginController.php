<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PEAR2\Net\RouterOS;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\redirect;

class LoginController extends Controller
{
    // public function login(Request $request){
    //     try {
    //         // $client = new RouterOS\Client('10.21.0.234', 'admin', 'mikman123!');
    //         $client = new RouterOS\Client($request->address, $request->user, $request->password);

    //         $util = new RouterOS\Util($client);
    //         // $datas = $util->setMenu('/log')->getAll(); 
    //         // $datas = $client->sendSync(new RouterOS\Request('/ip address print'));

    //         return view('dashboard', compact('util'));
    //     } catch (Exception $e) {
    //         // return redirect()->back()->with('error',$e);
    //     }
    // }

    public function login(Request $request){
        return view('dashboard');
    }

    public function loginpost(Request $request){
        // $validate = Validator::make(
        //     $request->all(), 
        //     ['ipaddress' => 'required|ip',
        //     'username' => 'required',
        //     'password' => 'required',
        //     ]
        // );

        // if($validate->fails()){
        //     return redirect()->back()->withInput($request->input)->withErrors($validate);
        // }else{
            try {
                // DO WHILE
                $client = new RouterOS\Client('10.21.0.234', 'owen', 'owen');
                $util = new RouterOS\Util($client);

                $dataLog = $util->setMenu('/log')->getAll();
            }catch(Exception $e){
                echo "error g bisa ";
            }
            // session::put('client',$client);
            session::put('util',$util);
            session::put('address','10.21.0.234');
            session::put('username',$request->user);
            return redirect('/admin/dashboard');
        // }
    }

    function logout(Request $request){
        $request->session()->flush();
        
        return redirect('');
     }

    function getIP(){
        return view('ipall', compact('util'));
    }
}
