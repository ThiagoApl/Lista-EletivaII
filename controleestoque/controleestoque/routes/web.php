<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);


use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::resource('fornecedor', FornecedorController::class);


use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', VendedoresController::class);
