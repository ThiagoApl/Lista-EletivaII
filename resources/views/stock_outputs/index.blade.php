@extends('layouts.admin')

@section('title', 'Saídas no Estoque')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><rect x="3" y="7" width="18" height="13" rx="2" fill="url(#paint0_linear_stockout)"/><rect x="7" y="3" width="10" height="4" rx="1" fill="#ef4444"/><defs><linearGradient id="paint0_linear_stockout" x1="3" y1="7" x2="21" y2="20" gradientUnits="userSpaceOnUse"><stop stop-color="#ef4444"/><stop offset="1" stop-color="#06b6d4"/></linearGradient></defs></svg>
                </span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Saídas no Estoque</h1>
            </div>
            <button onclick="document.getElementById('saida-form').classList.toggle('hidden')" class="btn">Nova Saída</button>
        </div>
        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            <p class="text-gray-300 mb-4">Visualize e registre as saídas de produtos do estoque, por venda, devolução ou outros motivos.</p>
            <table class="table mb-8" style="background: rgba(30,32,48,0.98);">
                <thead>
                    <tr>
                        <th style="color: #111; background: #fff; font-weight: bold;">Produto</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Motivo</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Quantidade</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Data</th>
                        <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($outputs as $output)
                    <tr>
                        <td style="color: #fff; font-weight: 500;">{{ $output->product->name ?? '-' }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $output->reason }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $output->quantity }}</td>
                        <td style="color: #fff; font-weight: 500;">{{ $output->date }}</td>
                        <td class="flex flex-row gap-2">
                            <a href="{{ route('stock-outputs.show', $output->id) }}" class="table-action no-bg view">Ver</a>
                            <a href="{{ route('stock-outputs.edit', $output->id) }}" class="table-action no-bg edit">Editar</a>
                            <form action="#" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão?')">
                                <button type="submit" class="table-action no-bg delete">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="saida-form" class="w-full flex flex-col items-center justify-center mt-8 hidden">
                <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
                    <h2 class="text-xl font-extrabold mb-4 text-white drop-shadow-lg">Registrar Nova Saída</h2>
                    <form method="POST" action="{{ route('stock-outputs.store') }}" class="w-full">
                        @csrf
                        <div class="mb-5 w-full">
                            <label for="product_id" class="label text-white">Produto</label>
                            <select name="product_id" id="product_id" class="input w-full">
                                <option value="">Selecione um produto</option>
                                @foreach(\App\Models\Product::all() as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5 w-full">
                            <label for="quantity" class="label text-white">Quantidade</label>
                            <input type="number" name="quantity" id="quantity" class="input w-full" min="1" placeholder="0">
                        </div>
                        <div class="mb-5 w-full">
                            <label for="date" class="label text-white">Data</label>
                            <input type="date" name="date" id="date" class="input w-full">
                        </div>
                        <div class="mb-8 w-full">
                            <label for="reason" class="label text-white">Motivo</label>
                            <select name="reason" id="reason" class="input w-full">
                                <option value="Venda">Venda</option>
                                <option value="Devolução">Devolução</option>
                                <option value="Outro">Outro</option>
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
