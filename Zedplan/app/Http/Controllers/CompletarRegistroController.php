<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DetallesUsuario;
use Carbon\Carbon;
use App\User;

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
        //Comprobar si el usuario completo sus datos o no. 
        if(Auth::user()->idRol==1){
            return view('completar_registro');
        }
        else if(Auth::user()->idRol==2){
            redict()->route('home');   
        }
    }

    public function guardar(Request $request)
    {
    	//Validar los datos ingresados
        $request->validate([
    		'sexo' => 'required|max:1|alpha',
    		'altura' => 'required|max:3',
    		'peso' => 'required|max:3',
    		'fecha_nacimiento' => 'date|required|before:today',
            'direccion' => 'max:255|alpha',
    	]);

        //Guardar los datos en la base de datos
        $detalles = new DetallesUsuario();
        $detalles->idUsuario = Auth::user()->id;
        $detalles->sexo = $request->sexo;
        $detalles->altura = $request->altura;
        $detalles->peso = $request->peso;
        $detalles->fecha_nacimiento = $request->fecha_nacimiento;

        //Comprobar si es mayor de edad y guardar la direccion.
        $edad = Carbon::parse($request->fecha_nacimiento)->age;
        if($edad >= 18) {
            $detalles->direccion = $request->address_address;
            $detalles->direccion_latitud = $request->address_latitude;
            $detalles->direccion_longitud = $request->address_longitude;
        }
        $detalles->save();
        

        //Actualizar el rol del usuario a usuario confirmado.
        Auth::User()->confirmarUsuario();

        return view('home');

        
    }

    public function guardarDireccion (Request $request)
    {
        $request->validate([
            'direccion' => 'required|max:255|alpha',
            'latitud' => 'required',
            'longitud' => 'required',
        ]);


        return view('confirmar_dirreccion');
    }
}
