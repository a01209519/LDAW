<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulo;
use App\Models\Oferta;

class OfertasController extends Controller
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

        $var = Oferta::saveOffer($request);
        if($var == false){
            return redirect('/')->with('error','No se pudo completar el registro');
        }else{
            return redirect('/')->with('message','Oferta registrada');
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
        $response = Oferta::getOffers($id);
        if($response!=false){
            $videojuego = $response['videojuego'];
            $ofertas = $response['ofertas'];
            $juego_aceptado = $response['videojuego_aceptado'];
            return view("ofertas",[
                'ofertas'=>$ofertas,
                'videojuego'=>$videojuego,
                'juego_aceptado'=>$juego_aceptado,
            ]);
        }else{
            return redirect()->route('cerrar_sesion');
        }
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

    public function aceptar_oferta($id)
    {
        //
        $response = Oferta::acceptOffer($id);
        if($response!=false){
            return back()->with('message','Oferta aceptada');
        }else{
            return redirect()->route('cerrar_sesion');
        }
    }

    public function rechazar_oferta($id)
    {
        //
        $response = Oferta::rejectOffer($id);
        if($response!=false){
            return back()->with('message','Oferta rechazada');
        }else{
            return redirect()->route('cerrar_sesion');
        }
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
    }
}
