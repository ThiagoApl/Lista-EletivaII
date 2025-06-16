@extends('layouts.admin')

@section('title', 'Cadastrar Vendedor')

@section('content')
    <div class="card max-w-lg w-full mx-auto mt-16">
        <h1 class="text-3xl font-extrabold mb-2 text-white drop-shadow-lg">Cadastrar Novo Vendedor</h1>
        <p class="mb-8 text-blue-200 text-base">Preencha os dados abaixo para adicionar um novo vendedor ao sistema.</p>
        @if ($errors->any())
            <div class="alert alert-error mb-6">
                <ul class="list-disc ml-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('sellers.store') }}">
            @csrf
            <div class="mb-5">
                <label for="nome" class="label text-white">Nome do Vendedor</label>
                <input type="text" name="nome" id="nome" class="input" value="{{ old('nome', 'João Silva') }}" placeholder="Ex: João Silva" required>
            </div>
            <div class="mb-5">
                <label for="foto" class="label text-white">URL da Foto</label>
                <input type="text" name="foto" id="foto" class="input" value="{{ old('foto', 'https://randomuser.me/api/portraits/men/1.jpg') }}" placeholder="https://..." required>
            </div>
            <div class="mb-5">
                <label for="codigo_identificacao" class="label text-white">Código de Identificação</label>
                <input type="text" name="codigo_identificacao" id="codigo_identificacao" class="input" value="{{ old('codigo_identificacao', 'VEND123') }}" placeholder="Ex: VEND123" required>
            </div>
            <div class="mb-5">
                <label for="comissao" class="label text-white">Comissão (%)</label>
                <input type="number" step="0.01" name="comissao" id="comissao" class="input" value="{{ old('comissao', '5.00') }}" placeholder="Ex: 5.00" required>
            </div>
            <div class="mb-8">
                <label for="area_atuacao" class="label text-white">Área de Atuação</label>
                <input type="text" name="area_atuacao" id="area_atuacao" class="input" value="{{ old('area_atuacao', 'São Paulo, Interior') }}" placeholder="Ex: São Paulo, Interior" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn">Cadastrar Vendedor</button>
            </div>
        </form>
    </div>
@endsection 