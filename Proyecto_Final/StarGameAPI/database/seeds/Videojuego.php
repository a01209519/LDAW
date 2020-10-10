<?php

use Illuminate\Database\Seeder;

class Videojuego extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videojuego')->insert([
            'id_usuario' => '1',
            'id_plataforma' => '1',
            'id_titulo' => '1',
            'id_condicion' => '1',
        ]);
    }
}
