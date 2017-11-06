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

Auth::routes();

// Route::get('/home', 'HomeController@index');

// subscriber dashboard 
Route::get('/subscriber/dashboard', 'HomeController@userDashboard');

Route::get('/test', function(){
	return view('backend.dashboard');
});

// user Verify 
Route::get('/subscriber/dashboard/verify','HomeController@verifyUserPage' );
Route::post('/subscriber/dashboard/verify/store','HomeController@verifyUserInfoStore' );

Route::get('/home/sign-up','Frontend\RegisterController@index');
Route::post('/home/register','Frontend\RegisterController@store');



//backend Dahsbaod 

Route::get('/backend/dashboard','Backend\HomeController@dashboard');