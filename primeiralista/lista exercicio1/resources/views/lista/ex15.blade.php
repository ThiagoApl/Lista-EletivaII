@extends('layout')

@section('conteudo')

<form method="post" action="/listaex15">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Insira a quantidade de dias:</label>
        <input type="number" id="dias" name="dias" class="form-control" step="0.1" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
    <p>O resultado é: {{ $resultado }} </p>
@endisset

@endsection