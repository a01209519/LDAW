<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPrivilegioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolPrivilegio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_privilegios');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_privilegios')->references('id')->on('privilegios');
            $table->foreign('id_rol')->references('id')->on('rol');
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
        Schema::dropIfExists('rolPrivilegio');
    }
}
