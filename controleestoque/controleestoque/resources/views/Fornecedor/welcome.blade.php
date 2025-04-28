<h1>Lista de Fornecedores</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('fornecedores.create') }}">Novo Fornecedor</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Código</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fornecedor as $fornecedor)
            <tr>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->codigo }}</td>
                <td>
                    <a href="{{ route('fornecedor.edit', $fornecedor->id) }}">Editar</a>
                    <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>