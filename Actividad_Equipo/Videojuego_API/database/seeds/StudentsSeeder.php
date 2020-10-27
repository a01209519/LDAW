<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nombre' => "Victor Manuel",
            'apellidos' => "Avila Hernandez",
            'experiencia'=>'Hola',
            'ruta' => "",
        ]);
    }
}
