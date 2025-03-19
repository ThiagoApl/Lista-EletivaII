@extends ('Layout')
@section('Title', 'Primeiro Exemplo')
@section('content')
    <h1 class="text-center"> Formulario de Valores</h1>
    <form action="/formulario_resposta" method="POST"></form>
        @csrf
        <div class="mb-3">
            <label for="valor1" class="form-label"> Valor 1</label>
            <input type="number" class="form-control" id="valor1" name="valor1"
                placeholder="Digite o Primeiro Valor" required>
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label"> Valor2</label>
            <input type="number" class="form-control" id="valor2" name="valor2"
                placeholder="Digite o segundo valor" required>
        </div>
        <button type="submit" class="btn btn-primary"> Enviar</button>
    </form>

@isset ($soma)
    <div class="alert alert-sucess mt-5">
        O valor da soma é {{ $soma }}
    </div>
    @endisset
@endsection

