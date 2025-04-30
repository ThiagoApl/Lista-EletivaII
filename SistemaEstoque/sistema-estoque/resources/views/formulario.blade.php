@extends('layout')

@section('title' 'Primeiro Exemplo')

@section('content')
    <h1 class="text-center">Formulario de Valores</h1>
    <form action="/formulario_resposta" method="POST">
        @csrf

        <div class="mb-3">
            <label for="valor1" class="form-label">valor1</label>
            <input type="number" class="form-control" id="valor1" name="valor1"
                placeholder="Digite o Primeiro Valor" required>
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">valor1</label>
            <input type="number" class="form-control" id="valor2" name="valor2"
                placeholder="Digite o segundo Valor" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection


