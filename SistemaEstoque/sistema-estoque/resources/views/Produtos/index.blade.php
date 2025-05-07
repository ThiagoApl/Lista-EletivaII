@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}">Adicionar Novo Produto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->codigo }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}">Visualizar</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection