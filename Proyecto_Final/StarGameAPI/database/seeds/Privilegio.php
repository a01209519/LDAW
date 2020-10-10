<?php

use Illuminate\Database\Seeder;

class Privilegio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('privilegios')->insert([
            'nombre' => 'Registrar Videojuego',
            'descripcion' => null,
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Realizar Oferta',
            'descripcion' => null,
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Registrar Titulo',
            'descripcion' => null,
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Registrar Plataforma',
            'descripcion' => null,
        ]);
    }
}
