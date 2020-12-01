<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resena', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_titulo');
            $table->unsignedBigInteger('id_tipo');
            $table->text('comentarios');
            $table->integer('likes')->nullable();

            $table->foreign('id_titulo')->references('id')->on('titulo')->onDelete('cascade');
            $table->foreign('id_tipo')->references('id')->on('tiporesena');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('resena');
    }
}
