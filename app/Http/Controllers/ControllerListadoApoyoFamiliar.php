<?php

namespace App\Http\Controllers;

use App\create_apoyo_familiar;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerListadoApoyoFamiliar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apoyo = create_apoyo_familiar::with('educadores')
        ->get();
//        dd($apoyo);

        $etapa = array('1'=>'1ra Etapa', '2'=>'2da Etapa','3'=>'3ra Etapa');
        $dimension = array('1'=>'Identificación', '2'=>'Salud','3'=>'Educación','4'=>'Empleo/Ingresos','5'=>'Seguridad AlimentariaSaneamiento Básico','6'=>'Dinámica Familiar','7'=>' Habilitabilidad');


        return view('admin.listado.listaApoyoFamiliar', compact('apoyo','etapa','dimension'));
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
        //
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
