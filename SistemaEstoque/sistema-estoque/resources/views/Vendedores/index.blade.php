// resources/views/vendedores/index.blade.php
// Lista todos os vendedores

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Vendedores</h1>

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
                <th>Comissão</th>
                <th>Área de Atuação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ $vendedor->codigo }}</td>
                    <td>{{ $vendedor->comissao }}</td>
                    <td>{{ $vendedor->area_atuacao }}</td>
                    <td>
                        <a href="{{ route('vendedores.show', $vendedor->id) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                        <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Novo Vendedor</a>
@endsection
```html