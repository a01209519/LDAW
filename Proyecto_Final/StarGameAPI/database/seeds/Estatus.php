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
            'nombre' => 'Aceptado',
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Rechazado',
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Espera',
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Ofertado',
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Recibido',
        ]);

        DB::table('estatus')->insert([
            'nombre' => 'Leido',
        ]);
    }
}
