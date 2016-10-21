<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $user = User::all();
//        dd($user);
//        return view('home');
//    }




    public function index(){
        return 'hola';
    }

    public function store(LoginRequest $request){
        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('/admin');
        }
    }
    public function create(Request $request){
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])
        ]);
        Session::flash('messagen-error','datos creados correctamente');
        return Redirect::to('/admin');
    }


}
