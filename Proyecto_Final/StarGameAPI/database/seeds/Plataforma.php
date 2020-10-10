<?php

use Illuminate\Database\Seeder;

class Plataforma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plataforma')->insert([
            'nombre' => 'Xbox One',
            'descripcion' => 'Consola de videojuego de Microsoft que es reproductora de videojuegos y video.',
        ]);

        DB::table('plataforma')->insert([
            'nombre' => 'Play Station 4',
            'descripcion' => 'Consola de videojuego de Sony que es reproductora de videojuegos y video.',
        ]);

        DB::table('plataforma')->insert([
            'nombre' => 'Nintendo Switch',
            'descripcion' => 'Consola de videojuego de Nintendo, es consola portatil.',
        ]);
    }
}
