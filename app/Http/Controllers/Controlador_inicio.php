<?php

namespace App\Http\Controllers;

use App\datos_persona;
use Illuminate\Http\Request;

use App\Http\Requests;

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
        return view('admin.inicio');
    }

}
