<?php

namespace App\Http\Controllers;

use App\dato_nino;
use App\datos_persona;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ControllerNino extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.createNino');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);



            $dpersona = datos_persona::create([
                'nombre'=>$request['nombre'],
                'apellido'=>$request['apellido'],
                'ci'=>$request['ci'],
                'edad'=>$request['edad'],
                'fechanacimiento'=>$request['fechanacimiento'],
                'telefono'=>$request['telefono'],
                'email'=>null,
                'direccion'=>$request['direccion'],
                'sexo'=>$request['sexo'],
                'latitud'=>$request['latitud'],
                'longitud'=>$request['longitud']


            ]);


              dato_nino::create([
                    'id_datos_persona'=>$dpersona->id_datos_persona,
                    'actividad'=>$request['actividad'],
                    'responsable'=>$request['responsable']
                ]);






        Session::flash('message',' Registrado');
        return redirect('/nino');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
