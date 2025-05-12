@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Entradas de Produtos</h1>

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
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->produto->nome }}</td> {{-- Assumindo que a entrada tem um relacionamento com o produto --}}
                    <td>{{ $entrada->quantidade }}</td>
                    <td>{{ $entrada->data }}</td>
                    <td>{{ $entrada->fornecedor->nome }}</td> {{-- Assumindo que a entrada tem um relacionamento com o fornecedor --}}
                    <td>
                        <a href="{{ route('entradas.show', $entrada->id) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('entradas.edit', $entrada->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                        <form action="{{ route('entradas.destroy', $entrada->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('entradas.create') }}" class="btn btn-primary">Nova Entrada</a>
@endsection