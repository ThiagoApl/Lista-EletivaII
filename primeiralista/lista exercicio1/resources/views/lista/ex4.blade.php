@extends('layout')

@section('conteudo')

<form method="post" action="/listaex4">
    @csrf
    <div class="mb-3">
        <label for="largura" class="form-label">Insira a largura:</label>
        <input type="number" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Insira a altura:</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>


</form>


@isset($area)
<p> A área do triangulo é: {{ $area }}</p> 
@endisset
@endsection