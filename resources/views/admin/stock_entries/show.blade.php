@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-6">Detalhes da Entrada</h2>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Produto:</p>
                    <p class="font-semibold">{{ $stock_entry->product->name }}</p>
                </div>
                
                <div>
                    <p class="text-gray-600">Fornecedor:</p>
                    <p class="font-semibold">{{ $stock_entry->supplier->nome }}</p>
                </div>
                
                <div>
                    <p class="text-gray-600">Quantidade:</p>
                    <p class="font-semibold">{{ $stock_entry->quantity }}</p>
                </div>
                
                <div>
                    <p class="text-gray-600">Data:</p>
                    <p class="font-semibold">{{ $stock_entry->date }}</p>
                </div>
            </div>

            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('stock-entries.edit', $stock_entry) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Editar
                </a>
                <form action="{{ route('stock-entries.destroy', $stock_entry) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('Tem certeza que deseja excluir esta entrada?')">
                        Excluir
                    </button>
                </form>
                <a href="{{ route('stock-entries.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 