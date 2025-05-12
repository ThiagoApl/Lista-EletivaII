@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Detalhes da Saída</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Produto: {{ $saida->produto->nome }}</h5>
            <p class="card-text">Quantidade: {{ $saida->quantidade }}</p>
            <p class="card-text">Data: {{ $saida->data }}</p>
            <p class="card-text">Destino: {{ $saida->destino }}</p>
            <p class="card-text">Vendedor: {{ $saida->vendedor->nome ?? 'N/A' }}</p>
        </div>
    </div>
    <a href="{{ route('saidas.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
