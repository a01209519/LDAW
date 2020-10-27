<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model{

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "favorito";
	//Desactivacion de timestamps
	public $timestamps = true;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/
}
