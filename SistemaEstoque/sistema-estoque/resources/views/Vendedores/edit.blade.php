/ resources/views/vendedores/edit.blade.php
// Formulário para editar um vendedor existente

@extends('layouts.app') // Se você tiver um layout padrão

@section('content')
    <h1>Editar Vendedor</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
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
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $vendedor->nome }}" required>
        </div>
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo" class="form-control" value="{{ $vendedor->codigo }}" required>
        </div>
         <div class="form-group">
            <label for="comissao">Comissão:</label>
            <input type="number" name="comissao" id="comissao" class="form-control" value="{{ $vendedor->comissao }}" required>
        </div>
        <div class="form-group">
            <label for="area_atuacao">Área de Atuação:</label>
            <input type="text" name="area_atuacao" id="area_atuacao" class="form-control" value="{{ $vendedor->area_atuacao }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection