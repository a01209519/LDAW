<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    private $students=[
    	"1"=>[
    		"nombre"=>"Victor Manuel",
    		"apellidos"=>"Ávila Hernández"
    	],
    	"2"=>[
    		"nombre"=>"Jorge"
    		"apellidos" =>"López"
    	]
    ];
    function index(){
    	return view();
    }
}
