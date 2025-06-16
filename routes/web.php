<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/produtos', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/fornecedores', [App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('/relatorios', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
});

Route::get('/login', function () {
    return view('auth.mario-auth');
})->name('login');

Route::get('/register', function () {
    return view('auth.mario-auth');
})->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.post');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.post');

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('suppliers', App\Http\Controllers\Admin\SupplierController::class);
    Route::resource('sellers', App\Http\Controllers\Admin\SellerController::class);
    Route::resource('stock-entries', App\Http\Controllers\Admin\StockEntryController::class);
    Route::resource('stock-outputs', App\Http\Controllers\Admin\StockOutputController::class);
});


require __DIR__.'/auth.php';
