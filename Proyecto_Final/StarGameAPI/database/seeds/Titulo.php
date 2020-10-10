<?php

use Illuminate\Database\Seeder;

class Titulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo')->insert([
            'nombre' => Str::random(10),
            'edicion' => Str::random(10,null),
            'version' => null,
            'descripcion' => Str::random(50),
        ]);
    }
}
