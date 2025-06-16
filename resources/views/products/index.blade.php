@extends('layouts.admin')

@section('title', 'Produtos')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;"><svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><rect x="3" y="7" width="18" height="13" rx="2" fill="url(#paint0_linear_1_1)"/><rect x="7" y="3" width="10" height="4" rx="1" fill="#3b82f6"/><defs><linearGradient id="paint0_linear_1_1" x1="3" y1="7" x2="21" y2="20" gradientUnits="userSpaceOnUse"><stop stop-color="#3b82f6"/><stop offset="1" stop-color="#06b6d4"/></linearGradient></defs></svg></span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Produtos</h1>
            </div>
            <a href="{{ route('products.create') }}" class="btn">+ Novo Produto</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            @if($products->count())
                <table class="table" style="background: rgba(30,32,48,0.98);">
                    <thead>
                        <tr>
                            <th style="color: #111; background: #fff; font-weight: bold;">Nome</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Código</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Estoque</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Acessos</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td style="color: #fff; font-weight: 500;">{{ $product->name }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $product->code }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $product->stock }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $product->access_count }}</td>
                                <td class="flex flex-row gap-2">
                                    <a href="{{ route('products.show', $product->id) }}" class="table-action no-bg view">Ver</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="table-action no-bg edit">Editar</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão do produto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="table-action no-bg delete">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-gray-400 text-lg mt-8">Nenhum produto cadastrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection
