@extends('layouts.admin')

@section('title', 'Editar Fornecedor')

@section('content')
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Editar Fornecedor</h1>
        <p class="mb-8 text-blue-200 text-base">Altere os dados do fornecedor e clique em atualizar.</p>
        @if ($errors->any())
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="nome" class="label text-white">Nome do Fornecedor</label>
                <input type="text" name="nome" id="nome" class="input" value="{{ old('nome', $supplier->nome) }}" placeholder="Ex: Papelaria Central" required>
            </div>
            <div class="mb-5">
                <label for="documento" class="label text-white">CNPJ/CPF</label>
                <input type="text" name="documento" id="documento" class="input" value="{{ old('documento', $supplier->documento) }}" placeholder="Ex: 00.000.000/0001-00" required>
            </div>
            <div class="mb-5">
                <label for="email" class="label text-white">E-mail</label>
                <input type="email" name="email" id="email" class="input" value="{{ old('email', $supplier->email) }}" placeholder="Ex: contato@fornecedor.com" required>
            </div>
            <div class="mb-5">
                <label for="telefone" class="label text-white">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="input" value="{{ old('telefone', $supplier->telefone) }}" placeholder="Ex: (11) 99999-9999" required>
            </div>
            <div class="mb-5">
                <label for="endereco" class="label text-white">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="input" value="{{ old('endereco', $supplier->endereco) }}" placeholder="Ex: Rua das Flores, 123, Centro" required>
            </div>
            <div class="mb-8">
                <label for="categoria" class="label text-white">Categoria (opcional)</label>
                <input type="text" name="categoria" id="categoria" class="input" value="{{ old('categoria', $supplier->categoria) }}" placeholder="Ex: Papelaria, Limpeza, etc">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn bg-yellow-400 hover:bg-yellow-500 text-gray-900">Atualizar Fornecedor</button>
            </div>
        </form>
    </div>
@endsection 