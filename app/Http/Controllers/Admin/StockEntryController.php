<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StockEntry;
use App\Models\Product;
use Illuminate\Http\Request;

class StockEntryController extends Controller
{
    public function index()
    {
        $entries = StockEntry::with(['product', 'supplier'])->get();
        $products = \App\Models\Product::all();
        $suppliers = \App\Models\Supplier::all();
        return view('admin.stock_entries.index', compact('entries', 'products', 'suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);
        $entry = StockEntry::create($validated);
        // Atualiza o estoque do produto
        $product = Product::find($validated['product_id']);
        $product->stock += $validated['quantity'];
        $product->save();
        return redirect()->route('stock-entries.index')->with('success', 'Entrada registrada com sucesso!');
    }

    public function create()
    {
        $products = \App\Models\Product::all();
        $suppliers = \App\Models\Supplier::all();
        return view('admin.stock_entries.create', compact('products', 'suppliers'));
    }

    public function show(StockEntry $stock_entry)
    {
        return view('admin.stock_entries.show', compact('stock_entry'));
    }

    public function edit(StockEntry $stock_entry)
    {
        $products = \App\Models\Product::all();
        $suppliers = \App\Models\Supplier::all();
        return view('admin.stock_entries.edit', compact('stock_entry', 'products', 'suppliers'));
    }

    public function update(Request $request, StockEntry $stock_entry)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        // Atualiza o estoque do produto
        $oldProduct = Product::find($stock_entry->product_id);
        $oldProduct->stock -= $stock_entry->quantity;
        $oldProduct->save();

        $newProduct = Product::find($validated['product_id']);
        $newProduct->stock += $validated['quantity'];
        $newProduct->save();

        $stock_entry->update($validated);

        return redirect()->route('stock-entries.index')->with('success', 'Entrada atualizada com sucesso!');
    }

    public function destroy(StockEntry $stock_entry)
    {
        // Atualiza o estoque do produto
        $product = Product::find($stock_entry->product_id);
        $product->stock -= $stock_entry->quantity;
        $product->save();

        $stock_entry->delete();

        return redirect()->route('stock-entries.index')->with('success', 'Entrada excluída com sucesso!');
    }
} 