<?php

namespace App\Http\Controllers;

use App\Http\Models\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulos = Titulo::all()->sortBy('nombre');
        return $titulos;
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
    }

    
    public function show(Titulo $titulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulo $titulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulo $titulo)
    {
        //
    }
}
