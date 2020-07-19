<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompletarRegistroController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('completar_registro');
    }

    public function guardar(Request $request){
    	$request->validate([
    		'sexo' => 'required|max:1|alpha',
    		'altura' => 'required|max:3',
    		'peso' => 'required|max:3',
    		'fecha_nacimiento' => 'date|required|before:today',
    	]);
    }
}
