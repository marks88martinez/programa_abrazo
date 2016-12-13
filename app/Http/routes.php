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
Route::resource('log', 'LogController');

Route::group(['middleware'=>['auth']],function(){

    Route::resource('logout', 'LogController@logout');

    Route::resource('/responsable', 'ControllerResponsable');
    Route::resource('/educador', 'ControllerEducador');
    Route::resource('/nino','ControllerNino');
    Route::resource('/fuenteCalle','ControllerFuenteCalle');
    Route::resource('horas_trabajo','ControllerHorasTrabajadas');

    Route::resource('/listado','ControllerListadoEducador');
    Route::resource('/listadoresponsable','ControllerListadoResponsable');
    Route::resource('/listadonino','ControllerListadoNino');
    Route::resource('/listadoFuenteCalle','ControllerListadoFuenteCalle');
    Route::resource('/listadoApoyoFamiliar','ControllerListadoApoyoFamiliar');


    Route::resource('/apoyofamiliar','ControllerApoyoFamiliar');



    Route::get('actividad/{id}','ControllerFuenteCalle@actividad');
    Route::get('/inicio', 'Controlador_inicio@inicio');

    Route::get('print','ControllerHorasTrabajadas@pdfdatos');

//    Route::get('pdf',function(){
//        $user = \App\datos_persona::all();
//        $pdf = PDF::loadView('vista', ['user'=>$user]);
//        return $pdf->download('fuente_calle.pdf');
//    });

});

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
