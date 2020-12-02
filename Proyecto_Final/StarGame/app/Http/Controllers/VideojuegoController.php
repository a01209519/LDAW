<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Titulo;
use App\Models\Plataforma;
use App\Models\Condicion;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bool = Videojuego::save_user_game($request);
        if($bool==true){
            return redirect()->route('mis_juegos')->with('message','Se guardo el videojuego de manera exitosa');
        }else if($bool = false){
            return redirect('mis_juegos')->with('error','Hubo un error al guardar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bool = Videojuego::delete_user_game($id);
        if($bool == true){
            return redirect()->route('mis_juegos')->with('message','Se borró de manera exitosa el juego');
        }else if($bool == false){
             return redirect('mis_juegos')->with('error','Hubo un error al guardar');
        }
    }

    public function mis_juegos(){
        //Obtenemos juegos
        $juegos = Videojuego::get_user_games(session('id'));
        //Obtenemos los titulos para poder registrar un videojuego
        $titulos = Titulo::getTitles();
        //Obtenemos las plataformas
        $plataformas = Plataforma::getPlatforms();
        //Obtenemos las posibles condiciones de un juego
        $condiciones = Condicion::getConditions();
        //Si la función arroja falso, quiere decir que hay que volverse
        // a logear
        if($juegos=='false'){
            return redirect()->route('cerrar_sesion');
        }else{
            return view('misjuegos',[
                'juegos'=>$juegos,
                'titulos'=>$titulos,
                'plataformas'=>$plataformas,
                'condiciones'=>$condiciones
            ]);
        }
    }

    public function juegos_disponibles($id_titulo){
        $juegos = Videojuego::get_title_games($id_titulo);
        $juegos_usuario = Videojuego::get_user_games(session('id'));
        if($juegos=='false' || $juegos_usuario=='false'){
            return redirect()->route('cerrar_sesion');
        }else{
            return view('realizar_oferta',[
                'juegos'=>$juegos,
                'juegos_usuario'=>$juegos_usuario
            ]);
        }

    }
}
