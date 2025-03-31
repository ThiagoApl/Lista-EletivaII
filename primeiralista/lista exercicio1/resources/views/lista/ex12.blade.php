@extends('layout')

@section('conteudo')

<form method="post" action="/listaex12">
    @csrf
    <div class="mb-3">
        <label for="preco" class="form-label">Insira o preço:</label>
        <input type="number" id="preco" name="preco" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Insira o desconto:</label>
        <input type="number" id="desconto" name="desconto" class="form-control" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($preco_com_desconto)
    <p>O valor já descontado é: {{ $preco_com_desconto }} $</p>
@endisset

@endsection