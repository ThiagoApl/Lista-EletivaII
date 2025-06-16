@extends('layouts.admin')

@section('title', 'Detalhes do Vendedor')

@section('content')
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-xs md:max-w-sm p-6 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Detalhes do Vendedor</h2>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Nome:</span> <span class="text-white">{{ $seller->nome }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Código:</span> <span class="text-white">{{ $seller->codigo_identificacao }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Comissão:</span> <span class="text-white">{{ $seller->comissao }}%</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Área de Atuação:</span> <span class="text-white">{{ $seller->area_atuacao }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between items-center"><span class="font-bold text-gray-300">Foto:</span>
            @if($seller->foto)
                <img src="{{ $seller->foto }}" alt="Foto" class="w-20 h-20 rounded-full object-cover border border-blue-300 shadow ml-4">
            @else
                <span class="text-gray-400 ml-4">-</span>
            @endif
        </div>
        <a href="{{ route('sellers.index') }}" class="btn mt-6 w-full text-center">Voltar para Vendedores</a>
    </div>
</div>
@endsection 