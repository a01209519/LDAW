<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "rol";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/
	public function user(){
		return $this->belongsToMany(User::class, 'favorito', 'id_titulo', 'id_usuario');
	}

	public function Privilegio(){
		return $this->belongsToMany(Privilegio::class, 'rolprivilegio', 'id_rol', 'id_privilegio');
	}
}
