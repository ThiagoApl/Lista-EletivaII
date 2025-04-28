@extends('layouts.app')  @section('content')
    <h1>Nova Entrada de Estoque</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('entradas_estoque.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produto_id">Produto</label>
            <select name="produto_id" id="produto_id" class="form-control" required>
                <option value="">Selecione um Produto</option>
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>  @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fornecedor">Fornecedor</label>
            <input type="text" name="fornecedor" id="fornecedor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('entradas_estoque.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection