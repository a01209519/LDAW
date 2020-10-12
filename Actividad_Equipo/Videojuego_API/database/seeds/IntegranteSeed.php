<?php

use Illuminate\Database\Seeder;

class IntegranteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Paso1: Guardar en variable la consulta
        $integrante = DB::select('SELECT id FROM integrantes WHERE nombre ="Randy Orton"');
        //dd($integrante);
        //var_dump($integrante);

        DB::table('imagen')->insert([
        	'id_integrante' => $integrante,
        	'path' => '\public\img\4',
        ]);
    }
}
