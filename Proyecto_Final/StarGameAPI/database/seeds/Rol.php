<?php

use Illuminate\Database\Seeder;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => 'Usuario registrado'
            'descripcion' => null,
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Administrador'
            'descripcion' => null,
        ]);


    }
}
