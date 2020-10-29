<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model{
	
     /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "privilegios";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function Rol(){
		return $this->belongsToMany(Rol::class, 'rolprivilegio', 'id_privilegios', 'id_rol');
	}
}
