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
            'nombre' => 'Jorge Lopez',
            'telefono' => '44256325',
            'correo' => 'jorge_lopez@gmail.com',
            'correo_verificado' => NULL,
            'password' => 'password',
            'remember_token' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nombre' => 'Victor Avila',
            'telefono' => '9932394838',
            'correo' => 'victor_avila@gmail.com',
            'correo_verificado' => NULL,
            'password' => '123',
            'remember_token' => Hash::make('password'),
        ]);
    }
}
