<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view ('welcome');
});

Route::get('/formulario', function() {
    return view ('formulario');
});

Route::POST('/formulario_resposta', function (\ Illuminate\Http\Request $request): mixed {
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma =$valor1 + $valor2;
    return view('formulario', compact( 'soma'));
});