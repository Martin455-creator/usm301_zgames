<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("fecha/get", [ConsolasController::class, "getFecha"]);      //como lo hice a base del ejercicio hecho en clase no
Route::get("consolas/get",[ConsolasController::class, "getConsola"])    //quise cambiar las partes que dice consolas para no 
Route::get("consolas/post",[ConsolasController::class, "crearConsola"])  //enredarme 
Route::get("tipo/get", [ConsolasController::class, "getTipo"]);
