<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\Videojuego;
use App\Http\Models\Titulo;
use App\Http\Models\Favorito;
use App\Http\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	$videojuego = Videojuego::select('id_titulo')->where('id_condicion',2)->get();
    return $videojuego;
});*/

/*Route::get('/', function () {

	$user = User::findOrFail(1);
    return $user->titulo;
});*/

/*Route::get('/', function () {

	$titulo = Titulo::findOrFail(2);
    return $titulo->user;
});
*/