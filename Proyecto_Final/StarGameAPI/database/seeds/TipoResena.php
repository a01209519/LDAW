<?php

use Illuminate\Database\Seeder;

class TipoResena extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tiporesena')->insert([
            'nombre' => 'Positiva',
        ]);

       DB::table('tiporesena')->insert([
            'nombre' => 'Negativa',
        ]);
    }
}
