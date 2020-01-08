<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ADMIN
Route::get('/', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('pages.admin.login');
});
Route::get('/admin/dashboard',function(){
	return view('pages.admin.dashboard');
});
Route::get('/ticket',function(){ 
	return view('pages.client.ticket');
});
Route::post('/generate','ClientController@generateLink');//validated
Route::post('/relog','AdminController@reLogin');
Route::post('/vpn-account','AdminController@showAllVPN');


//CLIENT
Route::post('/submitLogin','LoginController@loginpost'); //Ga perlu validasi
Route::get('/login',function(){
	return view('pages.client.login');
});
Route::get('/login/request={request}', 'ClientController@getLink'); //Ga perlu validasi
Route::get('/client/dashboard',function(){
	return view('pages.client.dashboard');
});
Route::post('/register', 'ClientController@loginEmailLDAP');
Route::post('/registerClient','ClientController@registerClient');
Route::post('/addAddr','ClientDashboardController@addAddress');


//NEXT PUSH AKAN DIHAPUS KALO GA DIPAKE
Route::get('/dashboard',function(){
	return view('layouts.dashboard');
});
Route::get('/clientLogin',function(){
	return view('pages.client.clientLogin');
});
Route::post('/createVPN','DashboardController@createAccount');
// Route::get('/viewData','DashboardController@viewData');
Route::get('/clientRegister',function(){
	return view('clientRegister');
});
Route::get('/ipall','LoginController@getIP');
Route::post('/submitTicket','ClientController@registerTicketNumber');
Route::post('/loginVpnClient','ClientDashboardController@loginEmailLDAPClient');
// Route::get('/clientDashboard',function(){
// 	return view('pages.client.clientDashboard');
// });


//TESTING
Route::get('/sendEmail', function(){
	return view('clearview');
});
Route::post('/sendEmail', 'SendEmailController@sendEmailDepre');

Route::get('/test', function(){
	return view('templates.formregister');
});