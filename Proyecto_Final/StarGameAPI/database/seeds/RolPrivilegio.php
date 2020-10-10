<?php

use Illuminate\Database\Seeder;

class RolPrivilegio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rolprivilegio')->insert([
            'id_privilegios' => '1',
            'id_rol' => '1',
        ]);

         DB::table('rolprivilegio')->insert([
            'id_privilegios' => '2',
            'id_rol' => '1',
        ]);

         DB::table('rolprivilegio')->insert([
            'id_privilegios' => '3',
            'id_rol' => '2',
        ]);

         DB::table('rolprivilegio')->insert([
            'id_privilegios' => '4',
            'id_rol' => '2',
        ]);
    }
}
