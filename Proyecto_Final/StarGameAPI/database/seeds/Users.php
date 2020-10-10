<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => Str::random(10),
            'telefono' => '44256325',
            'correo' => Str::random(10).'@gmail.com',
            'correo_verificado' => NULL,
            'password' => Hash::make('password'),
            'remember_token' => Hash::make('password'),
        ]);
    }
}
