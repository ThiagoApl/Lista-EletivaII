<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Saídas de Estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('saidas_estoque.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">{{ __('Nova Saída') }}</a>

                    @if(session('success'))
                        <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('ID') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Produto') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Quantidade') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Data') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Destino') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Vendedor') }}</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Ações</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($saidasEstoque as $saida)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->produto->nome }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->quantidade }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->data }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->destino }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $saida->vendedor->nome }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('saidas_estoque.show', $saida->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Ver') }}</a>
                                        <a href="{{ route('saidas_estoque.edit', $saida->id) }}" class="text-green-600 hover:text-green-900 ml-2">{{ __('Editar') }}</a>
                                        <form action="{{ route('saidas_estoque.destroy', $saida->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">{{ __('Excluir') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>