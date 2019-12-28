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

Route::get('/getData','ClientController@test')->name('getData');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/submitLogin','LoginController@loginpost');

Route::get('/dashboard',function(){
	return view('dashboard');
});

Route::get('/clientRegister',function(){
	return view('clientRegister');
});

Route::post('/registerClient','ClientController@registerClient');
Route::post('/registerVendor','ClientController@registerVendor');

Route::get('/clientDashboard',function(){
	return view('clientDashboard');
});

Route::get('/ticketNumber',function(){
	return view('ticketNumber');
});

Route::post('/submitTicket','ClientController@registerTicketNumber');

Route::post('/relog','AdminController@reLogin');
Route::post('/vpn-account','AdminController@showAllVPN');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ipall','LoginController@getIP');
