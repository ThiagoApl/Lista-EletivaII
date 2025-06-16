@extends('layouts.admin')

@section('title', 'Fornecedores')

@section('content')
<div class="main-content w-full max-w-full flex flex-col items-center justify-start min-h-screen p-0" style="background: none;">
    <div class="w-full max-w-7xl mx-auto flex flex-col gap-6">
        <div class="flex flex-row items-center justify-between mt-8 mb-4">
            <div class="flex items-center gap-3" style="align-items: flex-start; min-height: 48px;">
                <span class="inline-block flex items-start pt-1" style="height: 38px;"><svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;"><rect x="2" y="8" width="20" height="12" rx="2" fill="url(#paint0_linear_sup)"/><rect x="6" y="4" width="12" height="5" rx="1" fill="#6366f1"/><defs><linearGradient id="paint0_linear_sup" x1="2" y1="8" x2="22" y2="20" gradientUnits="userSpaceOnUse"><stop stop-color="#6366f1"/><stop offset="1" stop-color="#06b6d4"/></linearGradient></defs></svg></span>
                <h1 class="page-title m-0 flex items-center" style="line-height: 1;">Fornecedores</h1>
            </div>
            <a href="{{ route('suppliers.create') }}" class="btn">+ Novo Fornecedor</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-2xl p-6">
            @if($suppliers->count())
                <table class="table" style="background: rgba(30,32,48,0.98);">
                    <thead>
                        <tr>
                            <th style="color: #111; background: #fff; font-weight: bold;">Nome</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">CNPJ</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">E-mail</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Telefone</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Endereço</th>
                            <th style="color: #111; background: #fff; font-weight: bold;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td style="color: #fff; font-weight: 500;">{{ $supplier->nome }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $supplier->documento }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $supplier->email }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $supplier->telefone }}</td>
                                <td style="color: #fff; font-weight: 500;">{{ $supplier->endereco }}</td>
                                <td class="flex flex-row gap-2">
                                    <a href="{{ route('suppliers.show', $supplier->id) }}" class="table-action no-bg view">Ver</a>
                                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="table-action no-bg edit">Editar</a>
                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirma exclusão do fornecedor?')">
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
                <p class="text-gray-400 text-lg mt-8">Nenhum fornecedor cadastrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection
