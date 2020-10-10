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
    }
}
