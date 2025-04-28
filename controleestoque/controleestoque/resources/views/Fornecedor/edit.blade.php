@extends('layouts.app')

@section('content')
    <h1>Editar Vendedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vendedores.update', $vendedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $vendedor->nome) }}" required>
        </div>
        <div class="form-group">
            <label for="codigo_identificacao">Código de Identificação:</label>
            <input type="text" name="codigo_identificacao" id="codigo_identificacao" class="form-control" value="{{ old('codigo_identificacao', $vendedor->codigo_identificacao) }}" required>
        </div>
        <div class="form-group">
            <label for="comissao">Comissão:</label>
            <input type="number" name="comissao" id="comissao" class="form-control" value="{{ old('comissao', $vendedor->comissao) }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="area_atuacao">Área de Atuação:</label>
            <input type="text" name="area_atuacao" id="area_atuacao" class="form-control" value="{{ old('area_atuacao', $vendedor->area_atuacao) }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" class="form-control">
            @if ($vendedor->foto)
                <img src="{{ asset('storage/' . $vendedor->foto) }}" alt="Foto do Vendedor" class="img-thumbnail">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection