// resources/views/fornecedores/show.blade.php
// Exibe os detalhes de um fornecedor específico

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Detalhes do Fornecedor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $fornecedor->nome }}</h5>
            <p class="card-text">Código: {{ $fornecedor->codigo }}</p>
        </div>
    </div>
    <a href="{{ route('fornecedores.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
