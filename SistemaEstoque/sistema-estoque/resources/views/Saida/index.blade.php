// resources/views/saidas/index.blade.php
// Lista todas as saídas de produtos

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Saídas de Produtos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>Destino</th>
                <th>Vendedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($saidas as $saida)
                <tr>
                    <td>{{ $saida->produto->nome }}</td> {{-- Assumindo que a saída tem um relacionamento com o produto --}}
                    <td>{{ $saida->quantidade }}</td>
                    <td>{{ $saida->data }}</td>
                    <td>{{ $saida->destino }}</td>
                     <td>{{ $saida->vendedor->nome ?? 'N/A' }}</td> {{-- Assumindo que a saída tem um relacionamento com o vendedor --}}
                    <td>
                        <a href="{{ route('saidas.show', $saida->id) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('saidas.edit', $saida->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                        <form action="{{ route('saidas.destroy', $saida->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('saidas.create') }}" class="btn btn-primary">Nova Saída</a>
@endsection