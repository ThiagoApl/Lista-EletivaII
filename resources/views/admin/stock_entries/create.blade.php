@extends('layouts.admin')

@section('title', 'Nova Entrada no Estoque')

@section('content')
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Nova Entrada no Estoque</h1>
        <form method="POST" action="{{ route('stock-entries.store') }}" class="w-full">
            @csrf
            <div class="mb-5 w-full">
                <label for="product_id" class="label text-white">Produto</label>
                <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    <option value="">Selecione um produto</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_id')<div class="text-red-400 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-5 w-full">
                <label for="quantity" class="label text-white">Quantidade</label>
                <input type="number" name="quantity" id="quantity" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="{{ old('quantity') }}" min="1">
                @error('quantity')<div class="text-red-400 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-5 w-full">
                <label for="date" class="label text-white">Data</label>
                <input type="date" name="date" id="date" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="{{ old('date') }}">
                @error('date')<div class="text-red-400 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-8 w-full">
                <label for="supplier_id" class="label text-white">Fornecedor</label>
                <select name="supplier_id" id="supplier_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    <option value="">Selecione um fornecedor</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>{{ $supplier->nome }}</option>
                    @endforeach
                </select>
                @error('supplier_id')<div class="text-red-400 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="flex justify-end w-full gap-4">
                <a href="{{ route('stock-entries.index') }}" class="btn bg-gray-400 hover:bg-gray-500 text-gray-900">Cancelar</a>
                <button type="submit" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection 