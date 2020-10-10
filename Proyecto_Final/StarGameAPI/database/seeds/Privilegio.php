<?php

use Illuminate\Database\Seeder;

class Privilegio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('privilegios')->insert([
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10,null),
        ]);
    }
}
