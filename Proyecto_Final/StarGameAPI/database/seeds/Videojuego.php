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
            'estatus' => 1,
        ]);

        DB::table('videojuego')->insert([
            'id_usuario' => '2',
            'id_plataforma' => '1',
            'id_titulo' => '3',
            'id_condicion' => '2',
            'estatus' => 1,
        ]);

        DB::table('videojuego')->insert([
            'id_usuario' => '2',
            'id_plataforma' => '1',
            'id_titulo' => '5',
            'id_condicion' => '2',
            'estatus' => 1,
        ]);

        DB::table('videojuego')->insert([
            'id_usuario' => '1',
            'id_plataforma' => '1',
            'id_titulo' => '2',
            'id_condicion' => '3',
            'estatus' => 1,
        ]);

        DB::table('videojuego')->insert([
            'id_usuario' => '1',
            'id_plataforma' => '2',
            'id_titulo' => '4',
            'id_condicion' => '3',
            'estatus' => 1,
        ]);
    }
}
