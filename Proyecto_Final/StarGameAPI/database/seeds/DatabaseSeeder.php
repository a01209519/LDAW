<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
        	Condicion::class,
        	Estatus::class,
        	Plataforma::class,
        	Titulo::class,
        	TipoResena::class,
        	Users::class,
        	Rol::class,
        	Privilegio::class,
        	RolPrivilegio::class,
        	UserRol::class,
        	Favorito::class,
        	Resena::class,
        	Videojuego::class
        ]);
    }
}
