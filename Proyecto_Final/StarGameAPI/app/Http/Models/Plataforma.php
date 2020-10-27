<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model{

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "plataforma";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function videojuego(){
		return $this->hasMany("App\Models\Videojuego");
	}
}
