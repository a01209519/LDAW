<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    
    public function index()
    {
        //Obtendo datos de mi API a traves del modelo Appointments con el metodo getAppointments.
        $titulo = Titulo::getTitles();
        return view('home',$titulo);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $titulo = Titulo::getTitle($id);
        $resena = Titulo::getResena($id);

        return view("titulo", [
            "titulo" => $titulo,
            "resena" => $resena
        ]);

    }
    public function edit(Titulo $titulo)
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
