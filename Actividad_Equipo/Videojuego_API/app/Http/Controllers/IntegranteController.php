<?php

namespace App\Http\Controllers;

use App\Http\Controllers\IntegranteController;
use Illuminate\Http\Request;
use App\Http\Requests\CreateIntegranteRequest;
use App\Http\Requests\UpdateIntegranteRequest;
use App\Integrante;

class IntegranteController extends Controller
{
    //Metdo GET HTTP para desplegar todos los datos
    /*public function index()
    {
        return Integrante::all();
    }*/

    //Seleccion de datos necesarios para la url
    public function index(Request $request){
        // Buscar por nombre de Integrante
        if($request->has('txtBuscar')){
            $integrantes = Integrante::where('nombre','like','%' . $request->txtBuscar . '%')
            ->orWhere('matricula', $request->txtBuscar)
            ->get();
        }
        else{
            //develover todos los integrantes
            $integrantes = Integrante::all();
        }
        return $integrantes;
    }

    //POST Insertar Datos
    public function store(CreateIntegranteRequest $request)
    {
        $input = $request->all();
        Integrante::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ]);
    }

    //GET Retorna un solo registro con el parametro ID
    public function show(Integrante $integrante){
        return $integrante;
    }

    //PUT actualizar registros
    public function update(UpdateIntegranteRequest $request, $id)
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
    }
}
