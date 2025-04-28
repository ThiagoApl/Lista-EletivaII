<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Fornecedor</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('fornecedor.create') }}"> Cadastrar Novo Fornecedor</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Foto</th>
                <th width="280px">Ações</th>
            </tr>
            @foreach ($fornecedor as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->id }}</td>
                    <td>{{ $fornecedor->nome }}</td>
                    <td>
                        @if($fornecedor->foto)
                            <img src="{{ asset($fornecedor->foto) }}" alt="{{ $fornecedor->nome }}" title="{{ $fornecedor->nome }}" class="rounded-circle" width="50" height="50">
                        @else
                            Sem Foto
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('fornecedor.destroy',$fornecedor->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('fornecedor.edit',$fornecedor->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>