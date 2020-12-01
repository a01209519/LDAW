<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuego', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_titulo');
            $table->unsignedBigInteger('id_plataforma');
            $table->unsignedBigInteger('id_condicion');
            $table->integer('estatus');

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_titulo')->references('id')->on('titulo')->onDelete('cascade');
            $table->foreign('id_plataforma')->references('id')->on('plataforma');
            $table->foreign('id_condicion')->references('id')->on('condicion');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videojuego');
    }
}
