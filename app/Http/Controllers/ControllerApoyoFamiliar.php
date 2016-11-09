<?php

namespace App\Http\Controllers;

use App\create_apoyo_familiar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ControllerApoyoFamiliar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $educadora = Auth::user()->nombre;
        return view('admin.create.apoyoFamiliar', compact('educadora'));
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
        create_apoyo_familiar::create([
            'id_educador'=>Auth::user()->id_datos_persona,
            'centro'=>$request['centro'],
            'nombre_titular'=>$request['nombretitular'],
            'domicilio'=>$request['domicilio'],
            'visita_numero'=>$request['visita'],
            'etapa_seguimiento'=>$request['etapa'],
            'dimensiones_t'=>$request['Dimension'],
            'Descripción'=>$request['descrip'],
            'resultados'=>$request['resultados'],
            'acuerdos'=>$request['acuerdos'],
            'proxima_visita'=>$request['pvisita']
        ]);
//        Session::flash('message','registrado correctamente');
        return Redirect::back()->with('message','registrado correctamente');

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
