@extends('layouts.admin')

@section('title', 'Cadastrar Produto')

@section('content')
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Cadastrar Novo Produto</h1>
        <p class="mb-8 text-blue-200 text-base">Preencha os dados abaixo para adicionar um novo produto ao sistema.</p>
        @if ($errors->any())
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-5">
                <label for="name" class="label text-white">Nome do Produto</label>
                <input type="text" name="name" id="name" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('name', 'Caneta Azul') }}" placeholder="Ex: Caneta Azul" required>
            </div>
            <div class="mb-5">
                <label for="code" class="label text-white">Código</label>
                <input type="text" name="code" id="code" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('code', 'PROD001') }}" placeholder="Ex: PROD001" required>
            </div>
            <div class="mb-5">
                <label for="photo" class="label text-white">URL da Foto (opcional)</label>
                <input type="text" name="photo" id="photo" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('photo', 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=facearea&w=400&h=400&q=80') }}" placeholder="https://...">
            </div>
            <div class="mb-5">
                <label for="stock" class="label text-white">Estoque Inicial</label>
                <input type="number" name="stock" id="stock" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('stock', 100) }}" min="0" placeholder="0">
            </div>
            <div class="mb-8">
                <label for="access_count" class="label text-white">Contagem de Acessos</label>
                <input type="number" name="access_count" id="access_count" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('access_count', 0) }}" min="0" placeholder="0">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn">Cadastrar Produto</button>
            </div>
        </form>
    </div>
@endsection
