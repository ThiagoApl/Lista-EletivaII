<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [ExerciciosController::class, 'abrirFormExer1']);
Route::post('/listaex1', [ExerciciosController::class, 'respostaExer1']);

Route::get('/ex2', [ExerciciosController::class, 'abrirFormExer2']);
Route::post('/listaex2', [ExerciciosController::class, 'respostaExer2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirFormExer3']);
Route::post('/listaex3', [ExerciciosController::class, 'respostaExer3']);

Route::get('/ex4', [ExerciciosController::class, 'abrirFormExer4']);
Route::post('/listaex4', [ExerciciosController::class, 'respostaExer4']);

Route::get('/ex5', [ExerciciosController::class, 'abrirFormExer5']);
Route::post('/listaex5', [ExerciciosController::class, 'respostaExer5']);

Route::get('/ex6', [ExerciciosController::class, 'abrirFormExer6']);
Route::post('/listaex6', [ExerciciosController::class, 'respostaExer6']);

Route::get('/ex7', [ExerciciosController::class, 'abrirFormExer7']);
Route::post('/listaex7', [ExerciciosController::class, 'respostaExer7']);

Route::get('/ex8', [ExerciciosController::class, 'abrirFormExer8']);
Route::post('/listaex8', [ExerciciosController::class, 'respostaExer8']);

Route::get('/ex9', [ExerciciosController::class, 'abrirFormExer9']);
Route::post('/listaex9', [ExerciciosController::class, 'respostaExer9']);

Route::get('/ex10', [ExerciciosController::class, 'abrirFormExer10']);
Route::post('/listaex10', [ExerciciosController::class, 'respostaExer10']);
