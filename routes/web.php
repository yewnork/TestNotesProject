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
	if (Auth::check()) {
    	return redirect()->route('dashboard');
	}else{
		return redirect()->route('login');
	}
    
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::post('dashboard', 'NoteController@store')->name('storeNote');

Route::get('dashboard', 'HomeController@index')->name('dashboard');
