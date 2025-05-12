// resources/views/vendedores/show.blade.php
// Exibe os detalhes de um vendedor específico

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Detalhes do Vendedor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $vendedor->nome }}</h5>
            <p class="card-text">Código: {{ $vendedor->codigo }}</p>
            <p class="card-text">Comissão: {{ $vendedor->comissao }}</p>
            <p class="card-text">Área de Atuação: {{ $vendedor->area_atuacao }}</p>
        </div>
    </div>
    <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
