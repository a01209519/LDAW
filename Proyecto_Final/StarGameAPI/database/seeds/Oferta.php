<?php

use Illuminate\Database\Seeder;

class Oferta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oferta')->insert([
            'id_usuario_recibe' => '1',
            'id_usuario_oferta' => '2',
            'id_videojuego_oferta' => '3',
            'id_videojuego_recibe' => '2',
            'id_estatus' => '3',
        ]);

        DB::table('oferta')->insert([
            'id_usuario_recibe' => '1',
            'id_usuario_oferta' => '2',
            'id_videojuego_oferta' => '5',
            'id_videojuego_recibe' => '3',
            'id_estatus' => '3',
        ]);

    }
}
