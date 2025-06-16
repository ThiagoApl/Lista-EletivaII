@extends('layouts.admin')

@section('title', 'Editar Entrada')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-4xl mx-auto flex flex-col gap-6 mt-12">
        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-extrabold mb-6 text-white drop-shadow-lg">Editar Entrada</h1>
            <form action="{{ route('stock-entries.update', $stock_entry) }}" method="POST" class="w-full">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="mb-4">
                        <label for="product_id" class="block text-gray-300 font-bold mb-2">Produto</label>
                        <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" {{ $stock_entry->product_id == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="supplier_id" class="block text-gray-300 font-bold mb-2">Fornecedor</label>
                        <select name="supplier_id" id="supplier_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" {{ $stock_entry->supplier_id == $supplier->id ? 'selected' : '' }}>
                                    {{ $supplier->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-300 font-bold mb-2">Quantidade</label>
                        <input type="number" name="quantity" id="quantity" value="{{ $stock_entry->quantity }}" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required min="1">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-gray-300 font-bold mb-2">Data</label>
                        <input type="date" name="date" id="date" value="{{ $stock_entry->date }}" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" required>
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-8">
                    <a href="{{ route('stock-entries.index') }}" class="btn bg-gray-500 hover:bg-gray-600 text-white">Cancelar</a>
                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-600 text-white">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 