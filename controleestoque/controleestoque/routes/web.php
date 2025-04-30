<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario', function () {
    return view('Formulario');
});

Route::post ('/Formulario_resposta', function(\Illuminate\http\Request $request) {
        $valor1 = intval($request->input('Valor1'));
        $valor2 = intval($request->input('Valor2'));
        $soma = $valor1 + $valor2;
        return View ('Formulario', compact('Soma'));
 });
