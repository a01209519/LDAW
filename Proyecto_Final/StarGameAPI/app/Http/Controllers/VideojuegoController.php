<?php

namespace App\Http\Controllers;

use App\Http\Models\Videojuego;
use Illuminate\Http\Request;
use App\User;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();
        if($user!=null){
            $bool = Videojuego::guardar_videojuego($request);
            if($bool == false){
                return response()->json(['error' => 'Error'], 500);
            }else{
                return response()->json(['success' => 'Success'], 200);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    //Function para traer todas las ofertas de un videojuego

    public function ofertas_videojuego($id){
        
        $user = auth()->user();
        if($user!=null){
            return $ofertas = Videojuego::videojuego_oferta($id);
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = auth()->user();
        if($user!=null){
            return $ofertas = Videojuego::datos_videojuego($id);
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videojuego $videojuego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = auth()->user();
        if($user!=null){
            $bool = Videojuego::borrarJuego($id);
            if($bool == true){
                return response()->json(['success' => 'Success'], 200);
            }else{
                return response()->json(['error' => 'Error'], 500);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function videojuegos_titulo($id_titulo,$id_user){
        $user = auth()->user();
        if($user!=null){
            $videojuegos = Videojuego::videojuego_titulo($id_titulo,$id_user);
            return $videojuegos;
        }else{
        return response()->json(['error' => 'Unauthorized'], 401); 
        }
    }
}
