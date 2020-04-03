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
    return view('home');
});

Auth::routes();
Route::get('/login/facebook','Auth\LoginController@facebook');
Route::get('/login/facebook/redirect','Auth\LoginController@facebook_callback');
Route::get('/login/google','Auth\LoginController@google');
Route::get('/login/google/redirect','Auth\LoginController@google_callback');

Route::get('/home', 'HomeController@index')->name('home');
