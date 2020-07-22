@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Mi Perfil</a>          
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Mi Perfil</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4>Datos Personales</h4>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Usuario:</h6> 
                  <div class="col-8">
                    <h6 class="datos">{{$usuario->username}}</h6>
                  </div>
                </div>
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Email:</h6> 
                  <div class="col-8">
                    <h6 class="datos">{{ $usuario->email }}</h6>
                  </div>
                </div>
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Fecha de Nacimiento:</h6> 
                  <div class="col-8">
                    <h6 class="datos">{{ $detalles->fecha_nacimiento }}</h6>
                  </div>
                </div>
                @if ($detalles->sexo != 'X')
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Genero:</h6> 
                  <div class="col-8">
                    @if ($detalles->sexo === 'M' )
                      Masculino
                    @else
                      Femenino
                    @endif
                  </h6>
                  </div>
                </div>
                @endif
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Peso:</h6> 
                  <div class="col-8">
                    <h6 class="datos">{{ $detalles->peso}} Kg</h6>
                  </div>
                </div>
                <div class="form-group row">
                  <h6 class="col-4 col-form-label">Altura:</h6> 
                  <div class="col-8">
                    <h6 class="datos">{{ $detalles->altura }} Cm</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		    </div>
		</div>
	</div>
</div>


@endsection
