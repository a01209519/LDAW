<?php

use Illuminate\Database\Seeder;

class Favorito extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorito')->insert([
            'id_usuario' => '1',
            'id_titulo' => '1',
        ]);

        DB::table('favorito')->insert([
            'id_usuario' => '2',
            'id_titulo' => '1',
        ]);

        DB::table('favorito')->insert([
            'id_usuario' => '1',
            'id_titulo' => '4',
        ]);

        DB::table('favorito')->insert([
            'id_usuario' => '1',
            'id_titulo' => '3',
        ]);

        DB::table('favorito')->insert([
            'id_usuario' => '2',
            'id_titulo' => '5',
        ]);
    
    }
}
