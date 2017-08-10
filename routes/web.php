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

// Redirect based on current logged in status
// No need to see the login form if you are already logged in!
Route::get('/', function () {
	if (Auth::check()) {
    	return redirect()->route('dashboard');
	}else{
		return redirect()->route('login');
	}
    
});


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Log out and redirect to login form
Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

Route::post('dashboard', 'NoteController@store')->name('storeNote');

Route::get('dashboard', 'HomeController@index')->name('dashboard');
