@extends('layouts.admin')

@section('title', 'Detalhes da Saída')

@section('content')
<div class="w-full flex flex-col items-center justify-center min-h-[60vh] mt-16">
    <div class="card w-full max-w-md p-8 flex flex-col items-start shadow-2xl border border-gray-700 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
        <h1 class="text-2xl font-extrabold mb-2 text-white drop-shadow-lg">Detalhes da Saída</h1>
        <ul class="text-white w-full">
            <li><b>Produto:</b> {{ $output->product->name ?? '-' }}</li>
            <li><b>Quantidade:</b> {{ $output->quantity }}</li>
            <li><b>Motivo:</b> {{ $output->reason }}</li>
            <li><b>Data:</b> {{ $output->date }}</li>
        </ul>
        <a href="{{ route('stock-outputs.index') }}" class="btn mt-6">Voltar</a>
    </div>
</div>
@endsection 