<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Usuario extends Model{
 
	protected $table = "users";
	//Desactivacion de timestamps
	public $timestamps = true;
}
