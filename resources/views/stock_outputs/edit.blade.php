@extends('layouts.admin')

@section('title', 'Editar Saída')

@section('content')
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Editar Saída</h1>
        <form method="POST" action="{{ route('stock-outputs.update', $output->id) }}" class="w-full">
            @csrf
            @method('PUT')
            <div class="mb-5 w-full">
                <label for="product_id" class="label text-white">Produto</label>
                <select name="product_id" id="product_id" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $output->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-5 w-full">
                <label for="quantity" class="label text-white">Quantidade</label>
                <input type="number" name="quantity" id="quantity" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="{{ $output->quantity }}" min="1">
            </div>
            <div class="mb-5 w-full">
                <label for="date" class="label text-white">Data</label>
                <input type="date" name="date" id="date" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="{{ $output->date }}">
            </div>
            <div class="mb-8 w-full">
                <label for="reason" class="label text-white">Motivo</label>
                <input type="text" name="reason" id="reason" class="input bg-white/80 text-gray-900 placeholder-gray-400 shadow focus:bg-white w-full" value="{{ $output->reason }}">
            </div>
            <div class="flex justify-end w-full gap-4">
                <a href="{{ route('stock-outputs.index') }}" class="btn bg-gray-400 hover:bg-gray-500 text-gray-900">Cancelar</a>
                <button type="submit" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection 