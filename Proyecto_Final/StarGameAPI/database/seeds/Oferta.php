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
            'id_usuario_oferta' => '1',
            'id_videojuego_oferta' => '1',
            'id_videojuego_recibe' => '1',
            'id_estatus' => '1',
        ]);
    }
}
