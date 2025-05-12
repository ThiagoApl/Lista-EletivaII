@// resources/views/produtos/index.blade.php
// Lista todos os produtos

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Produtos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->codigo }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo Produto</a>
@endsection