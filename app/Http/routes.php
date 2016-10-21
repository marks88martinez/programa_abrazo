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

Route::resource('/', 'Controlador_inicio');
Route::resource('/educador', 'ControllerEducador');

Route::resource('/listado','ControllerListadoEducador');

Route::get('/inicio', 'Controlador_inicio@inicio');


//Route::get('/ver', function () {
//    return view('admin.listado.listaEducador');
//});
//
//Route::get('/log', function (){
//    return view('login');
//});


//Route::auth();
//Route::get('/inicio', 'HomeController@index');
//
//
////Route::get('/home', 'HomeController@index');
