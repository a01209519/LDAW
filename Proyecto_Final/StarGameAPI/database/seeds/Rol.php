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
            'nombre' => 'Usuario registrado',
            'descripcion' => 'Uusairo Registrado',
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Administrador',
            'descripcion' => 'Usuario admin',
        ]);

    }
}
