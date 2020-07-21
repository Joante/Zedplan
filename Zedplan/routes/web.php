<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/completar_registro', 'CompletarRegistroController@index')->name('completarRegistro')->middleware('rol:SIN_CONF');	
Route::post('/completar_registro', 'CompletarRegistroController@guardar')->name('completarRegistro')->middleware('rol:SIN_CONF');