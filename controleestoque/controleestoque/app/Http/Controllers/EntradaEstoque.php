<?php

// Laravel - app/Http/Controllers/EntradaEstoqueController.php

namespace App\Http\Controllers;

use App\Models\EntradaEstoque;
use App\Models\Produto; // Assuming you have a Produto model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EntradaEstoqueController extends Controller {}
{
    public function index()
    {
        $entradas = EntradaEstoque::all();
        return View::make('entradas_estoque.index', compact('entradas'));
    }

    public function create()
    {
        $produtos = Produto::all(); // Fetch products to populate the dropdown
        return View::make('entradas_estoque.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'fornecedor' => 'required|string|max:255',
        ]);

        EntradaEstoque::create($request->all());

        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque criada com sucesso!');
    }

    public function edit(EntradaEstoque $entradaEstoque)
    {
        $produtos = Produto::all();
        return View::make('entradas_estoque.edit', compact('entradaEstoque', 'produtos'));
    }

    public function update(Request $request, EntradaEstoque $entradaEstoque)
    {
         $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'fornecedor' => 'required|string|max:255',
        ]);

        $entradaEstoque->update($request->all());

        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque atualizada com sucesso!');
    }

    public function destroy(EntradaEstoque $entradaEstoque)
    {
        $entradaEstoque->delete();
        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque excluída com sucesso!');
    }
}