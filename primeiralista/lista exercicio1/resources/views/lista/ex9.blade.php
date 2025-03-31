@extends('layout')

@section('conteudo')

<form method="post" action="/listaex9">
    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Metros para converter para centimetros:</label>
        <input type="number" id="metros" name="metros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>


@isset($centimetros)
<p> A quantidade convertida de metros para centimetros é: {{ $centimetros }} cm</p>
@endisset
@endsection