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
    return view('welcome');
});

Auth::routes();

Route::GET('/logout', function(){
	if (Auth::check())
		Auth::user()->update(['status'=>0]);
	Auth::logout();

	return redirect('/login');
})->name('user.logout');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function() {
	Route::get('/', 'UserController@index')->name('user.index');
	Route::get('edit', 'UserController@edit')->name('user.edit');
	Route::put('update', 'UserController@update')->name('user.update');
});

Route::get('/home', 'HomeController@index')->name('home');
