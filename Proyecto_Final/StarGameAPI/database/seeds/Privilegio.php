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
            'descripcion' => 'Poder registatr un jeugo neuvo',
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Realizar Oferta',
            'descripcion' => 'Ofertar por jeugo',
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Registrar Titulo',
            'descripcion' => 'Registrar titulo nuevo',
        ]);

         DB::table('privilegios')->insert([
            'nombre' => 'Registrar Plataforma',
            'descripcion' => 'Registrar Plataforma',
        ]);
    }
}
