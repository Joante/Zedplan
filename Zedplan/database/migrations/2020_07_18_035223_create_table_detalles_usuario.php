<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetallesUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detalles_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUsuario')->unique();
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->char('sexo',1);
            $table->integer('altura');
            $table->integer('peso');
            $table->date('fecha_nacimiento');
            $table->string('direccion')->nullable();
            $table->double('direccion_latitud')->nullable();
            $table->double('direccion_longitud')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_detalles_usuario');
    }
}
