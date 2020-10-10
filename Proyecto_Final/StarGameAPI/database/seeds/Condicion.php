<?php

use Illuminate\Database\Seeder;

class Condicion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condicion')->insert([
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10,null),
        ]);
    }
}
