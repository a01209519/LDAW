<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model{
    
    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "oferta";
	//Desactivacion de timestamps
	public $timestamps = true;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function estatus(){
		$this->hasMany("App\Models\Estatus");
	}

	public function videojuego(){
		$this->belongsToMany("App\Models\Videojuego");
	}
}
