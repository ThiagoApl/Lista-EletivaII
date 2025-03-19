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
    return view ('welcome');
});

Route::get('/formulario', function() {
    return view ('formulario');
});

Route::POST('/formulario_resposta', function (\Illuminate\Http\Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma =$valor1 + $valor2;
    return view('formulario', compact( 'soma'));
});