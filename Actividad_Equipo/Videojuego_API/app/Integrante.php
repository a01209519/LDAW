<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    //Caso de especificar un noimbre de tabla distinto crar variable $table
    //protected $table = 'my_flights';

    //Caso de id no sea primary key utilizar:
    //protected $primaryKey = 'flight_id';

    $integrantes = App\Models\Integrante::all();

    foreach ($integrantes as $integrante){
    	echo $integrante->nombre;
    }
}
