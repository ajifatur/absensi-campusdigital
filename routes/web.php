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

// Guest Capabilities...
Route::group(['middleware' => ['guest']], function(){
	// Home
	Route::get('/', function(){
		return view('front/index');
	});

	// Absensi
	Route::get('/absensi', function(){
		return view('front/absensi');
	});

	// Submit Absensi
	Route::post('/absensi/submit', 'AbsensiController@submit');
});