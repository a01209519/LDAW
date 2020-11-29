<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

	public static function guardar_videojuego(Request $request){
		$videojuego = new Videojuego;
		$videojuego->id_usuario = $request->input('id_usuario');
		$videojuego->id_titulo = $request->input('titulo');
		$videojuego->id_plataforma = $request->input('plataforma');
		$videojuego->id_condicion = $request->input('condicion');
		$videojuego->save();
		if($videojuego->save()){
			return true;
		}else{
			return false;
		}
	}

}
