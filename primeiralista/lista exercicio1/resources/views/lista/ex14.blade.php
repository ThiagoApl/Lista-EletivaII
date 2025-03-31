@extends('layout')

@section('conteudo')

<form method="post" action="/listaex14">
    @csrf
    <div class="mb-3">
        <label for="capital" class="form-label">Insira o capital:</label>
        <input type="number" id="capital" name="capital" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Insira a taxa:</label>
        <input type="number" id="taxa" name="taxa" class="form-control" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Insira o periodo:</label>
        <input type="number" id="periodo" name="periodo" class="form-control" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($montante)
    <p>O resultado é: {{ $montante }} $</p>
@endisset

@endsection
