<?php

namespace App\Http\Controllers;

use App\dato_nino;
use App\datos_persona;
use App\responsable;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\educador;
use Illuminate\Support\Facades\Session;

class ControllerListadoEducador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $educadores = educador::with('datos_persona')
            ->activa()
            ->paginate(2);
        $responsable = responsable::with('datos_persona')
            ->activa()
            ->get();

        return view('admin.listado.listaEducador', compact('educadores','responsable'));
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
        $datos = datos_persona::find($id);
        return view('admin.edit.editEducador',['datos'=>$datos]);
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


        $productos = datos_persona::find($id);
        $productos->fill($request->all());
        $productos->save();

        if ($request->tipo_cargo == 2)
        {
            educador::create([
                'id_datos_persona'=>$productos->id_datos_persona
            ]);
            $resp = responsable::find($id);
            $resp->delete();
        }elseif ($request->tipo_cargo == 1){
            responsable::create([
                'id_datos_persona'=>$productos->id_datos_persona
            ]);
            $edu = educador::find($id);
            $edu->delete();
        }



        Session::flash('message','Actualizado');
        return redirect('listado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        datos_persona::where('id_datos_persona','=',$id)->update(array('estado'=>2));
      Session::flash('message-error','Eliminado');
        return redirect('listado');
    }
}
