<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class CrearUsuario extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:usuario';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear usuario incluyendo Nombre de Usuario, Email y Contraseña.' ;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Valido los datos ingresados.
     *
     * @return Validator instance.
     */ 
    public function validarDatos(array $datos)
    {
        return Validator::make($datos, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Obtengo los datos
     *
     * @return array de datos.
     */
    public function obtenerDatos()
    {
        $comparacionContraseña = false;
        
        $usuario = $this->ask('Ingresar nombre de usuario');
        $email = $this->ask('Ingresar email');
        
        //Comparo las contraseñas para confirmarlas.
        while(! $comparacionContraseña){
            $contraseña = $this->secret('Ingrese contraseña');
            $confirmarContraseña = $this->secret('Confirme contraseña');
            if(strcmp($contraseña, $confirmarContraseña)==0){
                    $comparacionContraseña = true;
                }
                else {
                    $this->info('Las contraseñas no coinciden. Ingrese nuevamente');
                }
        }
        return $datos = array(
            'username' => $usuario,
            'email' => $email,
            'password' => $contraseña,
        );
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $datos = $this->obtenerDatos();

        $this->info('Validando datos');

        $validator = $this->validarDatos($datos);
        
        //Muestro los mensajes de error y vuelvo a preguntar los datos si fallo la validacion.
        while($validator->fails())
        {
            $this->info('Validacion fallida');

            $messages = $validator->messages();
            
            foreach ($messages->all() as $message)
            {                
                $this->info($message);
            }
            $datos = $this->obtenerDatos();
            $this->info('Validando datos');
            $validator = $this->validarDatos($datos);
        }
        
        //Creo el usuario y lo guardo.
        $user = new User();
        $user->password = Hash::make($datos['password']);
        $user->email = $datos['email'];
        $user->username = $datos['username'];
        
        if($user->save()){
            $this->info('Guardado exitoso');    
        }else
        {
            $this->info('Guardado fallido');
        }
    } 
}
