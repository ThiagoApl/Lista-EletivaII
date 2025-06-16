<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = \App\Models\Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function show(Seller $seller)
    {
        return view('sellers.show', compact('seller'));
    }

    public function edit(Seller $seller)
    {
        return view('sellers.edit', compact('seller'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'codigo_identificacao' => 'required|string|max:100|unique:sellers,codigo_identificacao',
            'comissao' => 'required|numeric|between:0,999999.99',
            'area_atuacao' => 'required|string|max:255',
        ]);
        $seller = Seller::create($validated);
        return redirect()->route('sellers.index')->with('success', 'Vendedor cadastrado com sucesso!');
    }

    public function update(Request $request, Seller $seller)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'codigo_identificacao' => 'required|string|max:100|unique:sellers,codigo_identificacao,' . $seller->id,
            'comissao' => 'required|numeric|between:0,999999.99',
            'area_atuacao' => 'required|string|max:255',
        ]);
        $seller->update($validated);
        return redirect()->route('sellers.index')->with('success', 'Vendedor atualizado com sucesso!');
    }

    public function destroy(Seller $seller)
    {
        $seller->delete();
        return redirect()->route('sellers.index')->with('success', 'Vendedor removido com sucesso!');
    }
} 