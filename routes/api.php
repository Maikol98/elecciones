<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'userController@login');


Route::apiResource('Departamentos', 'DepartamentosController');
Route::apiResource('Municipio', 'MunicipiosController');
Route::apiResource('Provincia', 'ProvinciasController');
Route::apiResource('Canton', 'CantonController');
Route::apiResource('Recintos', 'RecintosController');
Route::apiResource('Mesa', 'MesaController');
Route::apiResource('Actas', 'ActasController');
Route::apiResource('Jurado', 'JuradoController');
