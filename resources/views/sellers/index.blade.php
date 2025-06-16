@extends('layouts.admin')

@section('title', 'Vendedores')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;"><svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><circle cx="8.5" cy="10" r="4" fill="#3b82f6"/><circle cx="17" cy="11" r="3" fill="#06b6d4"/><rect x="3" y="16" width="11" height="5" rx="2" fill="#3b82f6"/><rect x="13" y="15" width="8" height="6" rx="2" fill="#06b6d4"/></svg></span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Vendedores</h1>
            </div>
            <a href="{{ route('sellers.create') }}" class="btn">+ Novo Vendedor</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            @if($sellers->count())
                <table class="table" style="background: rgba(30,32,48,0.98);">
                    <thead>
                        <tr>
                            <th style="color: #111; background: #fff; font-weight: bold;">Nome</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Código</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Comissão (%)</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Área de Atuação</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Foto</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sellers as $seller)
                            <tr>
                                <td style="color: #fff; font-weight: 500;">{{ $seller->nome }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $seller->codigo_identificacao }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $seller->comissao }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $seller->area_atuacao }}</td>
                                <td>
                                    @if($seller->foto)
                                        <img src="{{ $seller->foto }}" alt="Foto" class="w-12 h-12 rounded-full object-cover border border-blue-300 shadow">
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="flex flex-row gap-2">
                                    <a href="{{ route('sellers.show', $seller->id) }}" class="table-action no-bg view">Ver</a>
                                    <a href="{{ route('sellers.edit', $seller->id) }}" class="table-action no-bg edit">Editar</a>
                                    <form action="{{ route('sellers.destroy', $seller->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão do vendedor?')">
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
                <p class="text-gray-400 text-lg mt-8">Nenhum vendedor cadastrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection
