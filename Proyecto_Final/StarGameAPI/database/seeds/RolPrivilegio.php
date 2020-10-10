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
    }
}
