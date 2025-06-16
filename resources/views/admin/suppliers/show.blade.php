@extends('layouts.admin')

@section('title', 'Detalhes do Fornecedor')

@section('content')
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-xs md:max-w-sm p-6 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Detalhes do Fornecedor</h2>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Nome:</span> <span class="text-white">{{ $supplier->nome }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">CNPJ:</span> <span class="text-white">{{ $supplier->documento }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">E-mail:</span> <span class="text-white">{{ $supplier->email }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Telefone:</span> <span class="text-white">{{ $supplier->telefone }}</span></div>
        <div class="mb-1 w-full flex flex-row justify-between"><span class="font-bold text-gray-300">Endereço:</span> <span class="text-white">{{ $supplier->endereco }}</span></div>
        <a href="{{ route('suppliers.index') }}" class="btn mt-6 w-full text-center">Voltar para Fornecedores</a>
    </div>
</div>
@endsection 