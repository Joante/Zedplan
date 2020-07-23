<?php

namespace App\Http\Controllers;

use App\DetallesUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsuarioController extends Controller
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
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuario = Auth::user();
        //Comprobar si el usuario completo sus datos o no. 
        if($usuario->idRol==1){
            return redirect()->route('completarRegistro');
        }

        $detalles = DetallesUsuario::where('idUsuario', $usuario->id)->first();
        return view ('home', compact('detalles', 'usuario'));
    }
}
