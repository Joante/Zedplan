@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completar Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form_registro') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo: </label>

                            <div class="col-md-6">
                                <select id='sexo' name='sexo' class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo') }}" required>
                                   <option value="" selected/>Seleccione Sexo
                                   <option value="F" />Femenino
                                   <option value="M" />Masculino
                                   <option value="X" />Prefiero no decirlo
                                </select>

                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">Altura:</label>

                            <div class="col-md-6">
                                <input id="altura" type="number" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ old('altura') }}" required autofocus>

                                @error('altura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">Peso: </label>

                            <div class="col-md-6">
                                <input id="peso" type="number" class="form-control @error('peso') is-invalid @enderror" name="peso" value="{{ old('peso') }}" required >

                                @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">Fecha de Naciminento: </label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" required >

                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="button-siguiente" type="button" onclick="confirmarDireccion()" class="btn btn-primary">
                                    Siguiente
                                </button>
                            </div>
                        </div>

                        <div class="form-group row" id="form-direccion" style="display: none;">
                            <label for="address_address" class="col-md-4 col-form-label text-md-left">Direccion:</label>
                            <div class="col-md-6">
                                <input type="text" id="address-input" name="address_address" class="form-control map-input">
                                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                            </div>
                        </div>
                        <div id="address-map-container" style="width:100%;height:400px; display: none; ">
                            <div style="width: 100%; height: 100%" id="address-map"></div>
                        </div>
                        <br>
                        <div class="form-group row mb-0" id="boton-guardar" style="display: none;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset ('js/mapInput.js') }}"></script>
    <script>
        function confirmarDireccion()
        {
            document.getElementById("button-siguiente").style.display="none";
            if(calcularEdad()>=18){
                document.getElementById("form-direccion").style.display="block";
                document.getElementById("address-map-container").style.display="block";
                document.getElementById("boton-guardar").style.display="block";
            }else{
                document.getElementById("boton-guardar").style.display="block";
            }
        }

        function calcularEdad() {
            var hoy = new Date();
            var cumpleanos = new Date(document.getElementById("fecha_nacimiento").value);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }

            return edad;
        }
    </script>
@stop
