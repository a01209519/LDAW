<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Videojuego;

class Oferta extends Model{//pivot
    
    /***************************************
		CONFIGURACIÓN DEL MODELO
    ****************************************/
		//Especificación del noimbre de la tabla
	protected $table = "oferta";
	//Desactivacion de timestamps
	public $timestamps = true;

	/***************************************
		REELACIONES DEL MODELO
    ****************************************/

	public function estatus(){
		return $this->hasMany("App\Models\Estatus");
	}

	public function videojuego(){
		return $this->belongsToMany("App\Models\Videojuego");
	}

	public static function guardar_oferta(Request $request){
		$oferta = new Oferta;
		$oferta->id_videojuego_oferta = $request->input('id_videojuego_ofertado');
		$oferta->id_videojuego_recibe = $request->input('id_videojuego_recibido');
		$oferta->id_estatus = 3;
		$oferta->save();
		if($oferta->save()){
			return true;
		}else{
			return false;
		}
	}

	public static function aceptar_oferta(Request $request){
		//$id = $request->input('id_oferta');
		$id = $request->input('id_oferta');
		$oferta = Oferta::find($id);
		$id_videojuego = $oferta->id_videojuego_oferta;
		$id_videojuego_recibido = $oferta->id_videojuego_recibe;
		$oferta->id_estatus = 1;
		DB::beginTransaction();
		$oferta->save();
		$videojuego_oferta = Videojuego::find($id_videojuego);
		$videojuego_oferta->estatus = 2;
		$videojuego_oferta->save();
		$videojuego_recibe = Videojuego::find($id_videojuego_recibido);
		$videojuego_recibe->estatus = 2;
		$videojuego_recibe->save();
		$rechazados = self::select('oferta.id')->Where([['oferta.id_estatus','!=',1],['oferta.id_videojuego_oferta',$id_videojuego]])->delete();
		DB::commit();
		if($oferta->save()){
			return true;
		}else{
			DB::rollback();
			return false;
		}
	}
	public static function rechazar_oferta(Request $request){
		$id = $request->input('id_oferta');
		$oferta = Oferta::find($id);
		$cant = $oferta->delete();
		if($cant>0){
			return true;
		}else{
			return false;
		}
	}
}
