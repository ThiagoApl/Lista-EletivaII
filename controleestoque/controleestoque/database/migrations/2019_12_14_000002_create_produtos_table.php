<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

   

Schema::create('produtos', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('foto')->nullable();
    $table->string('codigo')->unique();
    $table->integer('quantidade_funcionarios_acesso')->default(0);
    $table->integer('quantidade_estoque')->default(0);
    $table->timestamps();
});