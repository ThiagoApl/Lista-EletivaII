<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);
Route::resource('fornecedor', FornecedorController::class);
Route::resource('vendedores', VendedorController::class);
