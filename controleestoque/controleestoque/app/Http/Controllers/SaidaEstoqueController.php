<?php

namespace App\Http\Controllers;

use App\Models\SaidaEstoque;
use App\Models\Produto;
use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SaidaEstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saidasEstoque = SaidaEstoque::with('produto', 'vendedor')->get();
        return View::make('saidas_estoque.index', compact('saidasEstoque'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();
        $vendedores = Vendedor::all();
        return view('saidas_estoque.create', compact('produtos', 'vendedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'destino' => 'required|string',
            'vendedor_id' => 'required|exists:vendedores,id',
        ]);

        SaidaEstoque::create($request->all());

        return redirect()->route('saidas_estoque.index')->with('success', 'Saída de Estoque criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SaidaEstoque $saidaEstoque)
    {
        return view('saidas_estoque.show', compact('saidaEstoque'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaidaEstoque $saidaEstoque)
    {
        $produtos = Produto::all();
        $vendedores = Vendedor::all();
        return view('saidas_estoque.edit', compact('saidaEstoque', 'produtos', 'vendedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SaidaEstoque $saidaEstoque)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'destino' => 'required|string',
            'vendedor_id' => 'required|exists:vendedores,id',
        ]);

        $saidaEstoque->update($request->all());

        return redirect()->route('saidas_estoque.index')->with('success', 'Saída de Estoque atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaidaEstoque $saidaEstoque)
    {
        $saidaEstoque->delete();

        return redirect()->route('saidas_estoque.index')->with('success', 'Saída de Estoque excluída com sucesso!');
    }
}
