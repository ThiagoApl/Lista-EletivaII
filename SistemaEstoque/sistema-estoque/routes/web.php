<?php

use Illuminate\Support\Facades\Route;

Route::get ('/', function () {
    return view ('Welcome');
});

Route::get ('/formulario', function () {
    return view('formulario');
});

Route::post('/formulario_resposta', function (\Illuminate\Http\Request $request) {
    $valor1 = intval($request->input('Valor1'));
    $valor2 = intval($request->input('Valor2'));
    $soma = $valor1 + $valor2;
    return view('formulario', compact('soma'));
});