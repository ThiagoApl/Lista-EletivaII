@extends('layout')

@section('conteudo')

<form method="post" action="/listaex11">
    @csrf
    <div class="mb-3">
        <label for="peso" class="form-label">Insira o peso (kg):</label>
        <input type="number" id="peso" name="peso" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Insira a altura (m):</label>
        <input type="number" id="altura" name="altura" class="form-control" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($imc)
    <p>O IMC é: {{ number_format($imc, 2) }}</p>
@endisset

@endsection
