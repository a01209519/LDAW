<?php

use Illuminate\Database\Seeder;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10,null),
        ]);
    }
}
