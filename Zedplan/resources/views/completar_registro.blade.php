@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completar Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('completarRegistro') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo: </label>

                            <div class="col-md-6">
                                <select id='sexo' name='sexo' class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
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
                            <label for="peso" class="col-md-4 col-form-label text-md-right">peso: </label>

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
                                <button type="submit" class="btn btn-primary">
                                    Siguiente
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
