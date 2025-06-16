@extends('layouts.admin')

@section('title', 'Entradas no Estoque')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><rect x="3" y="7" width="18" height="13" rx="2" fill="url(#paint0_linear_stockin)"/><rect x="7" y="3" width="10" height="4" rx="1" fill="#22c55e"/><defs><linearGradient id="paint0_linear_stockin" x1="3" y1="7" x2="21" y2="20" gradientUnits="userSpaceOnUse"><stop stop-color="#22c55e"/><stop offset="1" stop-color="#06b6d4"/></linearGradient></defs></svg>
                </span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Entradas no Estoque</h1>
            </div>
            <button onclick="document.getElementById('entrada-form').classList.toggle('hidden')" class="btn">Nova Entrada</button>
        </div>
        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            <table class="table" style="background: rgba(30,32,48,0.98);">
                <thead>
                    <tr>
                        <th style="color: #111; background: #fff; font-weight: bold;">Produto</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Fornecedor</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Quantidade</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Data</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($entries as $entry)
                    <tr>
                        <td style="color: #fff; font-weight: 500;">{{ $entry->product->name ?? '-' }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $entry->supplier->nome ?? '-' }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $entry->quantity }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $entry->date }}</td>
                        <td class="flex flex-row gap-2">
                            <a href="{{ route('stock-entries.show', $entry->id) }}" class="table-action no-bg view">Ver</a>
                            <a href="{{ route('stock-entries.edit', $entry->id) }}" class="table-action no-bg edit">Editar</a>
                            <form action="{{ route('stock-entries.destroy', $entry->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="table-action no-bg delete">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="color: #fff; font-weight: 500;">Caneta Azul</td>
                        <td style="color: #fff; font-weight: 500;">Fornecedor Exemplo</td>
                        <td style="color: #fff; font-weight: 500;">50</td>
                        <td style="color: #fff; font-weight: 500;">2025-06-11</td>
                        <td class="flex flex-row gap-2">
                            <a href="#" class="table-action no-bg view">Ver</a>
                            <a href="#" class="table-action no-bg edit">Editar</a>
                            <form action="#" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão?')">
                                <button type="submit" class="table-action no-bg delete">Excluir</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="entrada-form" class="w-full flex flex-col items-center justify-center mt-8 hidden">
                <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
                    <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Registrar Nova Entrada</h2>
                    <form method="POST" action="{{ route('stock-entries.store') }}" class="w-full">
                        @csrf
                        <div class="mb-5 w-full">
                            <label for="product_id" class="label text-white">Produto</label>
                            <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                                <option value="">Selecione um produto</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5 w-full">
                            <label for="quantity" class="label text-white">Quantidade</label>
                            <input type="number" name="quantity" id="quantity" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" min="1">
                        </div>
                        <div class="mb-5 w-full">
                            <label for="date" class="label text-white">Data</label>
                            <input type="date" name="date" id="date" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                        </div>
                        <div class="mb-8 w-full">
                            <label for="supplier_id" class="label text-white">Fornecedor</label>
                            <select name="supplier_id" id="supplier_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                                <option value="">Selecione um fornecedor</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex justify-end w-full gap-4">
                            <button type="reset" class="btn bg-gray-400 hover:bg-gray-500 text-gray-900">Cancelar</button>
                            <button type="submit" class="btn">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 