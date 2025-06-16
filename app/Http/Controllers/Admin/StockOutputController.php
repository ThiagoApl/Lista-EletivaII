<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockOutputController extends Controller
{
    public function index()
    {
        $outputs = \App\Models\StockExit::with('product')->get();
        return view('stock_outputs.index', compact('outputs'));
    }

    public function show($id)
    {
        $output = \App\Models\StockExit::with('product')->findOrFail($id);
        return view('stock_outputs.show', compact('output'));
    }

    public function edit($id)
    {
        $output = \App\Models\StockExit::findOrFail($id);
        $products = \App\Models\Product::all();
        return view('stock_outputs.edit', compact('output', 'products'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'reason' => 'required|string|max:255',
        ]);
        $output = \App\Models\StockExit::findOrFail($id);
        $output->update($validated);
        return redirect()->route('stock-outputs.index')->with('success', 'Saída atualizada com sucesso!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'reason' => 'required|string|max:255',
        ]);
        
        $output = \App\Models\StockExit::create($validated);
        // Atualiza o estoque do produto
        $product = \App\Models\Product::find($validated['product_id']);
        $product->stock -= $validated['quantity'];
        $product->save();
        return redirect()->route('stock-outputs.index')->with('success', 'Saída registrada com sucesso!');
    }

    //
}
