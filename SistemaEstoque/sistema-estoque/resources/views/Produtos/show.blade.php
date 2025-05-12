@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Detalhes do Produto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text">Código: {{ $produto->codigo }}</p>
            <p class="card-text">Quantidade: {{ $produto->quantidade }}</p>
        </div>
    </div>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
