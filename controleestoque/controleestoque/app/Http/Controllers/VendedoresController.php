<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Vendedores::all();
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'codigo' => 'required|unique:vendedores',
        ]);

        Produto::create($request->all());

        return redirect()->route('vendedores.index')->with('success', 'vendedores criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendedores $vendedores)
    {
        return view('vendedores.edit', compact('vendedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendedores $vendedores)
    {
        $request->validate([
            'nome' => 'required',
            'codigo' => 'required|unique:vendedores,codigo,' . $vendedores->id,
        ]);

        $vendedores->update($request->all());

        return redirect()->route('vendedores.index')->with('success', 'vendedores atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendedores $vendedores)
    {
        $vendedores->delete();

        return redirect()->route('vendedores.index')->with('success', 'vendedores excluído com sucesso!');
    }
}