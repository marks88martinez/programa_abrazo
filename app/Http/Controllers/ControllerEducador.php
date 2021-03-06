<?php

namespace App\Http\Controllers;

use App\datos_persona;
use App\educador;
use App\responsable;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerEducador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables =  responsable::with('datos_persona')
            ->activa()
            ->get();

        $resp = array();
        $resp ['']='';

        foreach ($responsables as $responsable)
        {
            $resp [$responsable->datos_persona->id_datos_persona] = $responsable->datos_persona->nombre.' - '.$responsable->datos_persona->ci;
        }

      $educador = educador::with('datos_persona')->get();

      return view('admin.create.createEducador', compact('resp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
//        dd($request->all());

        DB::transaction(function() use ($request){
            $dpersona = datos_persona::create([
                'nombre'=>$request['nombre'],
                'apellido'=>$request['apellido'],
                'ci'=>$request['ci'],
                'fechanacimiento'=>$request['fechanacimiento'],
                'telefono'=>$request['telefono'],
                'tipo_cargo'=>1,
                'email'=>$request['email'],
                'password'=>$request['password'],
                'direccion'=>$request['direccion'],
                'sexo'=>$request['sexo'],
                'latitud'=>$request['latitud'],
                'longitud'=>$request['longitud'],
            ]);

            educador::create([
                'id_datos_persona'=>$dpersona->id_datos_persona,
                'id_responsable'=>$request['id_responsable']
            ]);
        });
        Session::flash('message',' Registrado');
        return redirect('/educador');
    }

}
