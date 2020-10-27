<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model{
    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "videojuego";
	//Desactivacion de timestamps
	public $timestamps = false;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function plataforma(){
		return $this->belongsTo("App\Http\Models\Plataforma");
	}

	public function condicion(){
		return $this->belongsTo("App\Http\Models\Condicion");
	}

	public function oferta(){
		//$this->hasMany("App\Models\Oferta");
		return $this->belongsToMany("App\Http\Models\Oferta");
	}

	public function titulo(){
		return $this->belongsTo("App\Http\Models\Titulo");
	}

	public function user(){
		return $this->belongsTo("App\Http\Models\User");
	}

}
