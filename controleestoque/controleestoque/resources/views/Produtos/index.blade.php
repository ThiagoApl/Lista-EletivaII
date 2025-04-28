<h1>Lista de Produtos</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('produtos.create') }}">Novo Produto</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Código</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->codigo }}</td>
                <td>
                    <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>