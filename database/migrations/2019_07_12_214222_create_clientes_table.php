<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documento');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('observaciones')->nullable();;
            $table->string('pais');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('cpostal');
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
        Schema::dropIfExists('clientes');
    }
}
