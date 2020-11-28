<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    
    public function index()
    {
        
        $titulo = Titulo::getTitles();
        return view('home',["titulo"=>$titulo]);
    }

    
    public function create()
    {
        //
        //echo "Si";
    }

    
    public function store(Request $request)
    {
        //
        $var = Titulo::save_Title($request);
        if($var == true){
            return redirect('/');
        }else{
            return redirect('/');
        }
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
