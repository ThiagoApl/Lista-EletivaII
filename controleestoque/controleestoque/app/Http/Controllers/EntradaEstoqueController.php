<?php

namespace App\Http\Controllers;

use App\Models\EntradaEstoque;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EntradaEstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradasEstoque = EntradaEstoque::with('produto')->get();
        return View::make('entradas_estoque.index', compact('entradasEstoque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        return View::make('entradas_estoque.create', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'fornecedor' => 'required|string|max:255',
        ]);

        EntradaEstoque::create($request->all());

        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntradaEstoque  $entradaEstoque
     * @return \Illuminate\Http\Response
     */
    public function show(EntradaEstoque $entradaEstoque)
    {
        return View::make('entradas_estoque.show', compact('entradaEstoque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntradaEstoque  $entradaEstoque
     * @return \Illuminate\Http\Response
     */
    public function edit(EntradaEstoque $entradaEstoque)
    {
        $produtos = Produto::all();
        return View::make('entradas_estoque.edit', compact('entradaEstoque', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntradaEstoque  $entradaEstoque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradaEstoque $entradaEstoque)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
            'fornecedor' => 'required|string|max:255',
        ]);

        $entradaEstoque->update($request->all());

        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntradaEstoque  $entradaEstoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntradaEstoque $entradaEstoque)
    {
        $entradaEstoque->delete();

        return redirect()->route('entradas_estoque.index')->with('success', 'Entrada de estoque excluída com sucesso.');
    }
}