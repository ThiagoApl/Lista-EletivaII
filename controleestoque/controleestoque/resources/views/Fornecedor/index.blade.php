<@extends('layouts.app')

@section('content')
    <h1>Lista de Vendedores</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Novo Vendedor</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Comissão</th>
                <th>Área de Atuação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->id }}</td>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $vendedor->codigo_identificacao }}</td>
                    <td>{{ $vendedor->comissao }}</td>
                    <td>{{ $vendedor->area_atuacao }}</td>
                    <td>
                        <a href="{{ route('vendedores.show', $vendedor->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection