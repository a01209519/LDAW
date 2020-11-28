<?php

use Illuminate\Database\Seeder;

class Titulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo')->insert([
            'nombre' => 'Master Chief Collection',
            'edicion' => null,
            'version' => 'Standard',
            'descripcion' => 'Halo: The Master Chief Collection es una compilación de videojuegos de disparos en primera persona de la serie Halo , lanzada originalmente en noviembre de 2014 para Xbox One , y más tarde en Microsoft Windows hasta 2019 y 2020.',
            'estatus'=>1,
        ]);

        DB::table('titulo')->insert([
            'nombre' => 'Call of Duty Black Ops 4',
            'edicion' => null,
            'version' => 'Standard',
            'descripcion' => 'Es una secuela del juego Call of Duty: Black Ops III de 2015, la quinta entrada de lasubserie Black Ops y la decimoquinta. entrega de laserie Call of Duty en general.',
            'estatus'=>1,
        ]);

        DB::table('titulo')->insert([
            'nombre' => 'Super Smash Ultimate',
            'edicion' => null,
            'version' => 'Standard',
            'descripcion' => 'Super Smash Bros.Ultimate es un juego de lucha cruzado de 2018 desarrollado por Bandai Namco Studios y Sora Ltd.',
            'estatus'=>1,
        ]);

        DB::table('titulo')->insert([
            'nombre' => 'Fifa 21',
            'edicion' => null,
            'version' => 'Standard',
            'descripcion' => 'FIFA 21 es unvideojuego de simulación de fútbol publicado por Electronic Arts como parte de la serie FIFA.',
            'estatus'=>1,
        ]);

        DB::table('titulo')->insert([
            'nombre' => 'Fifa 21',
            'edicion' => null,
            'version' => 'Champions',
            'descripcion' => 'FIFA 21 es unvideojuego de simulación de fútbol publicado por Electronic Arts como parte de la serie FIFA.',
            'estatus'=>1,
        ]);

    }
}
