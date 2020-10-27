<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "estatus";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function videojuego(){
		return $this->hasMany("App\Models\Videojuego");
	}
}
