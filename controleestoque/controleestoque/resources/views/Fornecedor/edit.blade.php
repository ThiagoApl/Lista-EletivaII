<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Fornecedor</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('fornecedores.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome do Fornecedor:</strong>
                        <input type="text" name="nome" value="{{ $fornecedor->nome }}" class="form-control" placeholder="Nome do Fornecedor">
                        @error('nome')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto do Fornecedor:</strong>
                        <input type="file" name="foto" class="form-control" placeholder="Foto do Fornecedor">
                        @error('foto')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-md-12">
                    <img src="{{ asset($fornecedor->foto) }}" alt="{{ $fornecedor->nome }}" title="{{ $fornecedor->nome }}" class="rounded-circle" width="150" height="150">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary ml-3">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>