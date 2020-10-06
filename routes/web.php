<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'homeController@home');

Route::get('Departamento', 'homeController@votoDepartamento')->name('departamento');

Route::post('Votos', 'DepartamentosController@votosDepartamentos')->name('departamento.voto');

Route::get('Votos/provincias', 'ProvinciasController@votosProvinvias')->name('provincia.voto');

Route::get('Provincia','homeController@votoProvincia')->name('provincia');

Route::get('General', 'DepartamentosController@votosGeneral')->name('general');

Route::get('Export', 'DepartamentosController@exportExcelDepartamento')->name('export.excel');

Route::get('ExportView', 'DepartamentosController@export')->name('exportview.excel');

