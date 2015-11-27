<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'api/v0.1'), function(){
    Route::resource('marca', 'MarcaController',['only'=>['index', 'store', 'update', 'destroy', 'show']]);
    Route::resource('producto', 'ProductoController',['only'=>['index', 'store', 'update', 'destroy', 'show']]);
    Route::resource('logo', 'LogoController',['only'=>['index', 'store', 'update', 'destroy', 'show']]);
});