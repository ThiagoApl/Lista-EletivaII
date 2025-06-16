@extends('layouts.admin')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="w-full flex flex-col md:flex-row items-center justify-center min-h-[60vh] gap-8 mt-16">
    <div class="card w-full max-w-xs md:max-w-sm p-6 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Detalhes do Produto</h2>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Nome:</span> <span class="text-white">{{ $product->name }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Código:</span> <span class="text-white">{{ $product->code }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Estoque:</span> <span class="text-white">{{ $product->stock }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Acessos:</span> <span class="text-white">{{ $product->access_count }}</span></div>
        <a href="{{ route('products.index') }}" class="btn mt-6 w-full text-center">Voltar para Produtos</a>
    </div>
    @if($product->photo)
        <div class="flex justify-center items-center">
            <img src="{{ $product->photo }}" alt="Foto do produto" class="max-w-[220px] max-h-[220px] rounded-xl shadow-lg border border-gray-700 object-cover" style="background: #23243a;"/>
        </div>
    @endif
</div>
@endsection
