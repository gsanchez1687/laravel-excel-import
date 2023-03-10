<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Ejemplo 1
//Archivo excel de frutas
Route::get('frutas','FrutasController@index');
Route::post('frutas/importar','FrutasController@importar');

//Ejemplo 2
//Archivo Excel de usuarios

//Ejemplo 3
//Archivo de Factura