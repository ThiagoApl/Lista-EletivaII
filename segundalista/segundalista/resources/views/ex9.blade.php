@extends ('layout')

@section ('conteudo')


<form method="post" action="listaex9">

    @csrf

    <div class="mb-3">
        <label for="valor1" class="form-label">Informe um número</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
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