<?php

use Illuminate\Database\Seeder;

class Resena extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resena')->insert([
            'id_usuario' => '1',
            'id_tipo' => '1',
            'id_titulo' => '1',
            'comentarios' => 'Es un juego increible de accion ya ventura, para pasarte un buen rato.',
            'likes' => '6',
        ]);

        DB::table('resena')->insert([
            'id_usuario' => '2',
            'id_tipo' => '2',
            'id_titulo' => '5',
            'comentarios' => 'Muy aburrido el estilo de juego multijugador',
            'likes' => '2',
        ]);
    }
}
