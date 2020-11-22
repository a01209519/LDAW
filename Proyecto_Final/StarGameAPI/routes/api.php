<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Models\User;
use App\Http\Controllers\ResenaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('/', function () {

	$user = User::findOrFail(1);
    return $user->titulo;
});*/
Route::get('/user/aute','UserController@iniciar_sesion')->name('iniciar_sesion');
Route::get('/user/vg/{id}','UserController@user_videojuegos')->name('user_videojuegos');

Route::resource('titulos', 'TituloController');

//Route::get('/resena/{id}','ResenaController@show')->name('resena_show');

Route::apiResource('resena','ResenaController');

//Rutas para jwt

Route::group([
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});