<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Entrada de Estoque</title>
</head>
<body>
    <h1>Relatório de Entrada de Estoque</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Fornecedor</th>
                <th>Data de Entrada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->produto->nome }}</td>
                    <td>{{ $entrada->quantidade }}</td>
                    <td>{{ $entrada->fornecedor->nome }}</td>
                    <td>{{ $entrada->data_entrada }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>