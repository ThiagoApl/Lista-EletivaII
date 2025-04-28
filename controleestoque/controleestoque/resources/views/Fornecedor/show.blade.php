@extends('layouts.app')

@section('content')
    <h1>Detalhes do Vendedor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $vendedor->nome }}</h5>
            <p class="card-text"><strong>Código:</strong> {{ $vendedor->codigo_identificacao }}</p>
            <p class="card-text"><strong>Comissão:</strong> {{ $vendedor->comissao }}</p>
            <p class="card-text"><strong>Área de Atuação:</strong> {{ $vendedor->area_atuacao }}</p>
            @if ($vendedor->foto)
                <img src="{{ asset('storage/' . $vendedor->foto) }}" alt="Foto do Vendedor" class="img-thumbnail">
            @endif
        </div>
    </div>

    <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Voltar</a>
@endsection