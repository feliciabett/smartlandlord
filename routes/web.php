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

Route::get('/', function () { // the slash means homePage
    return view('login');
});

/*Route::get('/welcome',function(){
	return view('welcome');
}); */

Route::get('/home',function(){
	return view('home');
});
Route::get('profits',function(){
	return view('profits');
});
Route::get('buidings',function(){
	return view('buidings');
});
Route::get('/main',function(){
	return view('login');
});
