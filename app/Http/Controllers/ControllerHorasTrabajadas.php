<?php

namespace App\Http\Controllers;

use App\fuente_calle;

use App\horas_diarias_trabajado;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ControllerHorasTrabajadas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request);

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
       DB::transaction(function() use ($request){
        horas_diarias_trabajado::create([
            'id_fuente_calle'=>$request['id'],
            'horas'=>$request['Horas'],
            'fecha'=>$request['fechaTrabajo']
        ]);
    });


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
    public function edit(Request $request, $id )
    {
        $ninofuente = fuente_calle::with('educador')
            ->find($id);

       $hora =  horas_diarias_trabajado::select('id_hora_trabajada','id_fuente_calle','horas','fecha')
           ->where('id_fuente_calle','=',$id);



        $promedio =  horas_diarias_trabajado::where('id_fuente_calle','=',$id);

        if ($request->has('fechainicio') && $request->has('fechafin')){
            $hora = $hora->whereBetween('fecha',[$request->fechainicio ,$request->fechafin]);

            $promedio = $promedio->whereBetween('fecha',[$request->fechainicio ,$request->fechafin]);;
        }

        $hora = $hora->paginate(10);
        $promedio = $promedio->avg('horas');

        $finicio = $request->fechainicio;
        $ffin = $request->fechafin;
        return view('admin.create.horas_trabajadas', compact('ninofuente', 'hora', 'promedio','finicio','ffin'));
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
