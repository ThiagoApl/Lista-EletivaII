@extends ('layout')

@section ('conteudo')


<form method="post" action="listaex3">

    @csrf

    <div class="mb-3">
        <label for="valorProduto" class="form-label">Digite o valor do produto</label>
        <input type="number" id="valorProduto" name="valorProduto" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@isset($retorno)
    <div class="mt-3 alert alert-success" role="alert">
        {{$resultado}}.
    </div>
    <!-- retorno do resultado da conta -->
@endisset

@endsection