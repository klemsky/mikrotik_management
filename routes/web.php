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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/submitLogin','LoginController@loginpost');

Route::post('/relog','AdminController@reLogin');
Route::post('/vpn-account','AdminController@showAllVPN');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ipall','LoginController@getIP');
