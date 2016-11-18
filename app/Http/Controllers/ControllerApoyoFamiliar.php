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

    public  $var;



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
    public  function store(Request $request)
    {
//        dd($request);
        create_apoyo_familiar::create([
            'id_educador'=>Auth::user()->id_datos_persona,
            'centro'=>$request['centro'],
            'nombre_titular'=>$request['nombre_titular'],
            'domicilio'=>$request['domicilio'],
            'visita_numero'=>$request['visita_numero'],
            'etapa_seguimiento'=>$request['etapa_seguimiento'],
            'dimensiones_t'=>$request['dimensiones_t'],
            'Descripción'=>$request['Descripción'],
            'resultados'=>$request['resultados'],
            'acuerdos'=>$request['acuerdos'],
            'proxima_visita'=>$request['proxima_visita']
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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = create_apoyo_familiar::find($id);


        return view('admin.edit.editApoyoFamiliar',['datos'=>$datos]);
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
//        dd($request);

        $apoyo = create_apoyo_familiar::find($id);
        $apoyo->fill($request->all());
        $apoyo->save();

        Session::flash('message','Actualizado');
        return redirect('listadoApoyoFamiliar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apoyo = create_apoyo_familiar::find($id);
        $apoyo->delete();

        Session::flash('message','Eliminado');
        return redirect('listadoApoyoFamiliar');

    }
}
