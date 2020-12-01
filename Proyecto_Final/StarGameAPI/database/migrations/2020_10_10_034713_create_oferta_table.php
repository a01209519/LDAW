<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_videojuego_oferta');
            $table->unsignedBigInteger('id_videojuego_recibe');
            $table->unsignedBigInteger('id_estatus');

            $table->foreign('id_estatus')->references('id')->on('estatus');
            $table->foreign('id_videojuego_recibe')->references('id')->on('videojuego')->onDelete('cascade');
            $table->foreign('id_videojuego_oferta')->references('id')->on('videojuego')->onDelete('cascade');
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
        Schema::dropIfExists('oferta');
    }
}
