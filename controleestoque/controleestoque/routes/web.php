<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\EntradaEstoqueController;
use App\Http\Controllers\SaidaEstoqueController;

use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);
Route::resource('fornecedor', FornecedorController::class);
Route::resource('vendedores', VendedorController::class);
Route::resource('entradas_estoque', EntradaEstoqueController::class);
Route::resource('saidas_estoque', SaidaEstoqueController::class);