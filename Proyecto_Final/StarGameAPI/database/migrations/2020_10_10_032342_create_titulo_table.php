<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edicion')->nullable();
            $table->string('version')->nullable();
            $table->string('descripcion');
            $table->string('ruta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulo');
    }
}
