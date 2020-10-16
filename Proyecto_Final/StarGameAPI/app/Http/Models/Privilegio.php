<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model{
     /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "privilegio";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function videojuego(){
		$this->belongsTo("App\Models\Videojuego")
	}
}
