<?php

use Illuminate\Database\Seeder;

class Estatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus')->insert([
            'nombre' => Str::random(10),
        ]);
    }
}
