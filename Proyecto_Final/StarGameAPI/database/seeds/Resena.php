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
            'comentarios' => Str::random(10),
            'likes' => '10',
        ]);
    }
}
