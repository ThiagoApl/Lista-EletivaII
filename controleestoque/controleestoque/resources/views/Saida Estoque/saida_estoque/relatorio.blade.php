<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Saída de Estoque</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Relatório de Saída de Estoque</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Data de Saída</th>
                <th>Destino</th>
                <th>Vendedor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($saidas as $saida)
                <tr>
                    <td>{{ $saida->produto->nome }}</td>
                    <td>{{ $saida->quantidade }}</td>
                    <td>{{ $saida->data_saida }}</td>
                    <td>{{ $saida->destino }}</td>
                    <td>{{ $saida->vendedor->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>