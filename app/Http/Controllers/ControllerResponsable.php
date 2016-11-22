<?php

namespace App\Http\Controllers;

use App\datos_persona;
use App\educador;
use App\responsable;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class ControllerResponsable extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.create.createResponsable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::transaction(function() use ($request){
            $dpersona = datos_persona::create([
                'nombre'=>$request['nombre'],
                'apellido'=>$request['apellido'],
                'ci'=>$request['ci'],
                'fechanacimiento'=>$request['fechanacimiento'],
                'telefono'=>$request['telefono'],
                'tipo_cargo'=>2,
                'email'=>$request['email'],
                'password'=>$request['password'],
                'direccion'=>$request['direccion'],
                'sexo'=>$request['sexo']

            ]);

            responsable::create([
                'id_datos_persona'=>$dpersona->id_datos_persona
            ]);




        });


        Session::flash('message',' Registrado');
        return redirect('/responsable');
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
