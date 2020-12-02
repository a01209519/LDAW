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
		$videojuego->estatus = $request->input('estatus');
		$videojuego->save();
		if($videojuego->save()){
			return true;
		}else{
			return false;
		}
	}

	public static function datos_videojuego($id){
		$videojuego =self::select('titulo.id as titulo_id','videojuego.id as id','titulo.nombre as Titulo','condicion.nombre as Condicion','plataforma.nombre as Plataforma','titulo.version as titulo_version')
                        ->Where([
                            ['videojuego.id',$id],
                            ['videojuego.estatus',1],
                        ])
                        ->join('titulo','titulo.id','videojuego.id_titulo')
                        ->join('plataforma','plataforma.id','videojuego.id_plataforma')
                        ->join('condicion','condicion.id','videojuego.id_condicion')
                        ->get();
        return $videojuego;
	}

    public static function videojuego_oferta($id){
    	/*
    	select titulo.nombre from titulo, oferta, videojuego Where videojuego.id = oferta.id_videojuego_recibe AND titulo.id = videojuego.id AND oferta.id_videojuego_oferta = 3 AND oferta.id_videojuego_recibe != 3
    	*/
    	$ofertas = self::select('titulo.nombre as Titulo','titulo.id as id_titulo','users.id as id_usuario','plataforma.nombre as Plataforma','condicion.nombre as Condicion', 'titulo.version as Version','videojuego.id as id_videojuego','oferta.id as id_oferta')
    			->Where([
    				['oferta.id_videojuego_oferta',$id],
    				['oferta.id_videojuego_recibe','!=',$id],
    				['oferta.id_estatus',3]
    			])
    			->join('oferta','videojuego.id','oferta.id_videojuego_recibe')
    			->join('titulo','titulo.id','videojuego.id_titulo')
    			->join('plataforma','plataforma.id','videojuego.id_plataforma')
    			->join('condicion','condicion.id','videojuego.id_condicion')
    			->join('users','users.id','videojuego.id_usuario')
    			->get();

    	$response = [];
    	foreach ($ofertas as $item) {
    		$id = $item->id_videojuego;
    		$response[$id] = [
    			'Titulo' => $item->Titulo,
    			'id_titulo' =>$item->id_titulo,
    			'id_usuario'=>$item->id_usuario,
    			'Plataforma'=>$item->Plataforma,
    			'Condicion'=>$item->Condicion,
    			'Version'=>$item->Version,
    			'id_videojuego'=>$item->id_videojuego,
    			'id_oferta'=>$item->id_oferta
    		];
    	}
    	return $response;


    }

    public static function borrarJuego($id){
        $videojuego = self::find($id);
        $videojuego->delete();
        $videojuego = self::find($id);
        if($videojuego==null){
            return true;
        }else{
            return false;
        }
    }

}
