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

	Route::get('/', 'estudianteController@index');
	Route::resource('algo', 'estudianteController');
	Route::post('estud', 'estudianteController@store');
	Route::get('local/otro', 'otroController@index');