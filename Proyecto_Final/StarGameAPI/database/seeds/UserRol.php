<?php

use Illuminate\Database\Seeder;

class UserRol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userrol')->insert([
            'id_user' => '1',
            'id_rol' => '1',
        ]);

        DB::table('userrol')->insert([
            'id_user' => '2',
            'id_rol' => '2',
        ]);
    }
}
