<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
 public function abrirFormExer1() {
    return view('lista.ex1');
 }
}
