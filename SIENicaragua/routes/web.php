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

Route::get('startfree', function () {
    return view('demo');
});

Route::group(['prefix'	=>	'admin'], function () {
	Route::resource('contacts', 'ContactController');
	Route::resource('requests', 'RequestController');
	Route::resource('subscribeds', 'SubscribedController');
});