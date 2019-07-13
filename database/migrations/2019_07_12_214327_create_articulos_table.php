<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('descripcion2');
            $table->double('precio1');
            $table->double('precio2');
            $table->double('precio3');
            $table->double('precio4');
            $table->unsignedBigInteger('marca');
            $table->foreign('marca')->on('marcas')->references('id');
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->on('categorias')->references('id');
            $table->unsignedBigInteger('familia');
            $table->foreign('familia')->on('familias')->references('id');
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
        Schema::dropIfExists('articulos');
    }
}
