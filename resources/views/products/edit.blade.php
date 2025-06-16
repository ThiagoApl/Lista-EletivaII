@extends('layouts.admin')

@section('title', 'Editar Produto')

@section('content')
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Editar Produto</h1>
        <p class="mb-8 text-blue-200 text-base">Altere os dados do produto e clique em atualizar.</p>
        @if ($errors->any())
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="name" class="label text-white">Nome do Produto</label>
                <input type="text" name="name" id="name" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('name', $product->name) }}" placeholder="Ex: Caneta Azul" required>
            </div>
            <div class="mb-5">
                <label for="code" class="label text-white">Código</label>
                <input type="text" name="code" id="code" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('code', $product->code) }}" placeholder="Ex: PROD001" required>
            </div>
            <div class="mb-5">
                <label for="photo" class="label text-white">URL da Foto (opcional)</label>
                <input type="text" name="photo" id="photo" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('photo', $product->photo) }}" placeholder="https://...">
            </div>
            <div class="mb-5">
                <label for="stock" class="label text-white">Estoque</label>
                <input type="number" name="stock" id="stock" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('stock', $product->stock) }}" min="0" placeholder="0">
            </div>
            <div class="mb-8">
                <label for="access_count" class="label text-white">Contagem de Acessos</label>
                <input type="number" name="access_count" id="access_count" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white" value="{{ old('access_count', $product->access_count) }}" min="0" placeholder="0">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn bg-yellow-400 hover:bg-yellow-500 text-gray-900">Atualizar Produto</button>
            </div>
        </form>
    </div>
@endsection
