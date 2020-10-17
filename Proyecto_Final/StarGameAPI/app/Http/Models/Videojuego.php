<?php

namespace App\Models;

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
		$this->belongsTo("App\Models\Plataforma");
	}

	public function condicion(){
		$this->belongsTo("App\Models\Condicion");
	}

	public function oferta(){
		//$this->hasMany("App\Models\Oferta");
		$this->belongsToMany("App\Models\Oferta");
	}

	public function titulo(){
		$this->belongsTo("App\Models\Titulo");
	}

	public function user(){
		$this->belongsTo("App\Models\User");
	}

}
