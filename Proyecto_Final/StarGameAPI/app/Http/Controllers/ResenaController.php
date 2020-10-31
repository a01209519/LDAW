<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Resena;
use Illuminate\Support\Facades\DB;

class ResenaController extends Controller
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
        $coment = new Resena();
        $coment->id_usuario = $request->input('id_usuario');
        $coment->id_titulo = $request->input('id_titulo');
        $coment->id_tipo = 1;
        $coment->comentarios = $request->input('resena');
        $coment->save();
        if($coment->save()){
            return ["success"=>true];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function show($resena)
    {
        $resenas = User::usuario_resena($resena);

        return $resenas;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resena $resena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resena $resena)
    {
        //
    }
}
