<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SaidaController;

Route::resource('produtos', ProdutoController::class);
Route::resource('fornecedores', FornecedorController::class);
Route::resource('vendedores', VendedorController::class);
Route::resource('entradas', EntradaController::class);
Route::resource('saidas', SaidaController::class);