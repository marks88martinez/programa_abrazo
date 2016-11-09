<?php

namespace App\Http\Controllers;

use App\dato_nino;
use App\educador;
use App\fuente_calle;
use App\responsable;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ControllerFuenteCalle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dnino = dato_nino::with('datos_persona')
        ->activa()
        ->get();
        $datos = array();
        $datos['']='';
        foreach ($dnino as $dninos){
                $datos[$dninos->datos_persona->id_datos_persona] = $dninos->datos_persona->nombre.' - '.$dninos->datos_persona->ci;
    }


        $responsables = responsable::with('datos_persona')
            ->activa()
            ->get();
        $resp = array();
        $resp ['']='';
        foreach ($responsables as $responsable){
            $resp [$responsable->datos_persona->id_datos_persona] = $responsable->datos_persona->nombre.' - '.$dninos->datos_persona->ci;
        }


        $educadora = Auth::user()->nombre;



            return view('admin.create.fuente_calle',compact('datos','educadora','resp'));
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


        DB::transaction(function() use ($request){
            fuente_calle::create([
                'ideducador'=>Auth::user()->id_datos_persona,
                'centro'=>$request['centro'],
                'foco'=>$request['foco'],
                'procedencia'=>$request['procedencia'],
                'iddato_nino'=>$request['iddato_nino'],
                'observacion'=>$request['observacion'],

            ]);
        });




        Session::flash('message',' Registrado');
        return redirect('/fuenteCalle');
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

    public function actividad($id)
    {
        $idnino = dato_nino::select('actividad')
            ->find($id);
        return is_null($idnino)?'':$idnino->actividad;

    }
}
