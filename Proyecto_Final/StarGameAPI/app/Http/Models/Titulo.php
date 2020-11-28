<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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

	public static function guardar_Titulo(Request $request){
		$titulo = new Titulo;
		$titulo->nombre = $request->input('nombre');
		$titulo->version = $request->input('vers');
		$titulo->descripcion = $request->input('des');
		$titulo->save();
		if($titulo->save()){
			return true;
		}else{
			return false;
		}

	}

}
