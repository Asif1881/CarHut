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
//Route::get('/', function () {
//	return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auction', 'HomeController@auction')->name('auction');
Route::post('admin/store', 'HomeController@ssstore')->name('store');
Route::get('/asif', 'HomeController@asif')->name('asif');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
