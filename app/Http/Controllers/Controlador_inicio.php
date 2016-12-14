<?php

namespace App\Http\Controllers;

use App\create_apoyo_familiar;
use App\dato_nino;
use App\datos_persona;
use App\fuente_calle;
use App\horas_diarias_trabajado;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class Controlador_inicio extends Controller
{


    public function index(){

    return view('login');
    }


    public function store(Request $request){
//        $ver = $request->all();
//        dd($ver);
    }
    public function inicio(){
        if (auth()->user()->tipo_cargo == 1) {
            $fuenteCalles = fuente_calle::where('ideducador','=', auth()->user()->id_datos_persona)
            ->whereHas('dato_nino', function($q) {
                $q->activa();
            })
            ->with(['dato_nino' => function($q) {
                $q->select('id_datos_persona');
            }, 'dato_nino.datos_persona' => function($q) {
                $q->select('id_datos_persona', 'nombre', 'apellido', 'longitud', 'latitud');
            }])->get();
            return view('admin.graficos_cargo1', ['fuenteCalles' => $fuenteCalles]);
        }
        $horasPorDia = horas_diarias_trabajado::groupBy('fecha')
            ->orderBy('fecha', 'asc')
            ->limit(7)
            ->selectRaw("fecha, sum(horas) as horas")
            ->get();
        $dimensionesPorDia = create_apoyo_familiar::groupBy(DB::raw('DATE(created_at)'), 'dimensiones_t')
            ->selectRaw("DATE(created_at) as fecha, dimensiones_t, count(*) as cantidad")
            ->get();
        $dimensiones = [
            1 => "Identificación",
            2 => "Salud",
            3 => "Educación",
            4 => "Empleo/Ingresos",
            5 => "Seguridad Alimentaria/Saneamiento Básico",
            6 => "Dinámica Familiar",
            7 => "Habitabilidad",
            8 => "Responsabilidades para la no realización de ningún trabajo infantil"
        ];


        $dimensionesPorDia = $dimensionesPorDia->groupBy('fecha', 'asc');
//        dd($dimensionesPorDia);
        $fechas = $dimensionesPorDia->keys();


//        dd($dimensionesPorDia);
        return view('admin.graficos', compact('horasPorDia', 'dimensiones', 'dimensionesPorDia', 'fechas'));
    }

}
