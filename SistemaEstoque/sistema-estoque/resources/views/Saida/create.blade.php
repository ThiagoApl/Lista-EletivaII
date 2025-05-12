@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Nova Saída de Produto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('saidas.store') }}" method="POST">
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
            <label for="destino">Destino:</label>
            <input type="text" name="destino" id="destino" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="vendedor_id">Vendedor:</label>
            <select name="vendedor_id" id="vendedor_id" class="form-control">
                <option value="">Selecione o Vendedor</option> {{-- Opcional, caso a saída possa não ter vendedor --}}
                @foreach($vendedores as $vendedor) {{-- Passar a lista de vendedores para a view --}}
                    <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('saidas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection