<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){

        return view ('lista.ex1');
    }
 }