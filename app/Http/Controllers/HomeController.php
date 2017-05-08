<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        if(\Auth::user()->privilegio == 1){
            return redirect('categorias');
        }

        if(\Auth::user()->privilegio == 2){
            return redirect('evaluaciones');
        }

        if(\Auth::user()->privilegio == 3){
            return redirect('profesores');
        }
    }
}
