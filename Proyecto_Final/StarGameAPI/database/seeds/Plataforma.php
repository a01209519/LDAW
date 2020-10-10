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
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10,null),
        ]);
    }
}
