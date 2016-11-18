<?php

namespace App\Http\Controllers;

use App\dato_nino;
use App\datos_persona;
use App\fuente_calle;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Session;

class ControllerListadoFuenteCalle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ninofuente = fuente_calle::with('educador')
        ->get();



        return view('admin.listado.listaFuenteCalle', compact('ninofuente'));


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

        $dnino = dato_nino::with('datos_persona')
            ->activa()
            ->get();
        $datos = array();
        $datos['']='';
        foreach ($dnino as $dninos){
            $datos[$dninos->datos_persona->id_datos_persona] = $dninos->datos_persona->nombre.' - '.$dninos->datos_persona->ci;
        }

        $listafuente = fuente_calle::find($id);
        $user = Auth::user()->nombre;


        return view('admin.edit.editfuente_calle',['listafuente'=>$listafuente, 'user'=>$user, 'datos'=>$datos]);

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

        $apoyo = fuente_calle::find($id);
        $apoyo->fill($request->all());
        $apoyo->save();

        Session::flash('message','Actualizado');
        return redirect('listadoFuenteCalle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apoyo = fuente_calle::find($id);
        $apoyo->delete();

        datos_persona::where('id_datos_persona','=',$id)->update(array('estado'=>2));
        Session::flash('message-error','Eliminado');
        return redirect('listadoFuenteCalle');
    }
}
