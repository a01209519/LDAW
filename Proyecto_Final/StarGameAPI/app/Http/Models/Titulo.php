<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;

class Titulo extends Model{

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
    //Especificación del noimbre de la tabla
	protected $table = "titulo";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function user(){
		return $this->belongsToMany(User::class, 'favorito', 'id_titulo', 'id_usuario');
	}


}
