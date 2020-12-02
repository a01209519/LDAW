<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            return redirect('/')->with('error','No se pudo completar el registro');
        }else{
            return redirect('/')->with('message','Titulo registrado');
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

    public function sugerencia(){
        $titulo = Titulo::getSugestions();
        return view('sugerencias',["titulo"=>$titulo]);
    }

    public function aceptar($id){
        $bool = Titulo::aceptar_rechazar($id,1);
        if($bool == false){
            return redirect('sugerencias')->with('error','Ocurrió un error');
        }else{
            if($bool == 1){
                return redirect('sugerencias')->with('message','Titulo Aceptado');;
            }
        }
    }
    public function rechazar($id){
        $bool = Titulo::aceptar_rechazar($id,2);
        if($bool == false){
            return redirect('sugerencias')->with('error','Ocurrió un error');
        }else{
            if($bool == 2){
                return redirect('sugerencias')->with('message','Titulo Rechazado');;
            }
        }
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
