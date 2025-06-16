<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'code' => 'required|string|max:100|unique:products,code',
            'access_count' => 'nullable|integer',
            'stock' => 'nullable|integer',
        ]);

        $validated['access_count'] = $validated['access_count'] ?? 0;
        $validated['stock'] = $validated['stock'] ?? 0;

        $product = Product::create($validated);

        // Redireciona para index com mensagem de sucesso na sessão
        return redirect()->route('products.index')
                         ->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'code' => 'required|string|max:100|unique:products,code,' . $id,
            'access_count' => 'nullable|integer',
            'stock' => 'nullable|integer',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produto removido com sucesso!');
    }
}
