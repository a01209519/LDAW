<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Oferta;

class OfertaController extends Controller
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
            $bool = Oferta::guardar_oferta($request);
            if($bool == false){
                return response()->json(['error' => 'Error'], 500);
            }else{
                return response()->json(['success' => 'Success'], 200);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */

    public function update(){

    }
    public function aceptar(Request $request)
    {
        //
        $user = auth()->user();
        if($user!=null){
            $bool = Oferta::aceptar_oferta($request);
            if($bool == false){
                return response()->json(['error' => 'Error'], 500);
            }else{
                return response()->json(['success' => 'Success'], 200);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function rechazar(Request $request)
    {
        //
        $user = auth()->user();
        if($user!=null){
            $bool = Oferta::rechazar_oferta($request);
            if($bool == false){
                return response()->json(['error' => 'Error'], 500);
            }else{
                return response()->json(['success' => 'Success'], 200);
            }
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
