<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{ 

    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "resena";
	//Desactivacion de timestamps
	public $timestamps = true;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/
	public function user(){
		return $this->belongsToMany(User::class, 'favorito', 'id_titulo', 'id_usuario');
	}

    public function titulo(){
        return $this->belongsTo(Rol::class, 'userrol', 'id_user', 'id_rol');
    }


}
