@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Editar Entrada de Produto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('entradas.update', $entrada->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
             <label for="produto_id">Produto:</label>
            <select name="produto_id" id="produto_id" class="form-control" required>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}" {{ $entrada->produto_id == $produto->id ? 'selected' : '' }}>
                        {{ $produto->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $entrada->quantidade }}" required>
        </div>
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ $entrada->data }}" required>
        </div>
        <div class="form-group">
            <label for="fornecedor_id">Fornecedor:</label>
            <select name="fornecedor_id" id="fornecedor_id" class="form-control" required>
                @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}" {{ $entrada->fornecedor_id == $fornecedor->id ? 'selected' : '' }}>
                        {{ $fornecedor->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection