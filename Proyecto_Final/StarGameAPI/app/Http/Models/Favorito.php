<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model{

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "favorito";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function titulo(){
		$this->belongsToMany("App\Models\Titulo")
	}

	public function user(){
		$this->belongsToMany("App\Models\User")
	}
}
