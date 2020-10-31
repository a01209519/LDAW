<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Pivot;

class Resena extends Pivot
{ 

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "resena";
	//Desactivacion de timestamps
	public $timestamps = true;


}
