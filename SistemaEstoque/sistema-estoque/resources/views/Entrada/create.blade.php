@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Nova Entrada de Produto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('entradas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produto_id">Produto:</label>
            <select name="produto_id" id="produto_id" class="form-control" required>
                @foreach($produtos as $produto) {{-- Passar a lista de produtos para a view --}}
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fornecedor_id">Fornecedor:</label>
             <select name="fornecedor_id" id="fornecedor_id" class="form-control" required>
                @foreach($fornecedores as $fornecedor) {{-- Passar a lista de fornecedores para a view --}}
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection