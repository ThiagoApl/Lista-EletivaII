<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);
Route::resource('fornecedor', FornecedorController::class);
Route::resource('produtos', VendedoresController::class);
