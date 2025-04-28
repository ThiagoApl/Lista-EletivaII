<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Saída de Estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('saidas_estoque.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="produto_id" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Produto') }}</label>
                            <select name="produto_id" id="produto_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">{{ __('Selecione um Produto') }}</option>
                                @foreach($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="quantidade" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Quantidade') }}</label>
                            <input type="number" name="quantidade" id="quantidade" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="data" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Data') }}</label>
                            <input type="date" name="data" id="data" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="destino" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Destino') }}</label>
                            <input type="text" name="destino" id="destino" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="vendedor_id" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Vendedor') }}</label>
                            <select name="vendedor_id" id="vendedor_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">{{ __('Selecione um Vendedor') }}</option>
                                @foreach($vendedores as $vendedor)
                                    <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                {{ __('Salvar') }}
                            </button>
                            <a href="{{ route('saidas_estoque.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                {{ __('Cancelar') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>