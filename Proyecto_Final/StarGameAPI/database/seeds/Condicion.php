<?php

use Illuminate\Database\Seeder;

class Condicion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condicion')->insert([
            'nombre' => 'Excelente',
            'descripcion' => 'Videojuego no tiene rayaduras, trae caja original. ',
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Buena',
            'descripcion' => 'Videojuego con caja original pero tiene leves rayones.',
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Regular',
            'descripcion' => 'El videojuego puede o no contener caja y tiene rayones notorios.',
        ]);

        DB::table('condicion')->insert([
            'nombre' => 'Malo',
            'descripcion' => 'El videojuego puede no funcionar y no tiene caja.',
        ]);
       }
}
