@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Detalhes da Entrada</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Produto: {{ $entrada->produto->nome }}</h5>
            <p class="card-text">Quantidade: {{ $entrada->quantidade }}</p>
            <p class="card-text">Data: {{ $entrada->data }}</p>
            <p class="card-text">Fornecedor: {{ $entrada->fornecedor->nome }}</p>
        </div>
    </div>
    <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
