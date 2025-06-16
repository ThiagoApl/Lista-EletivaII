<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'documento' => 'required|string|max:30',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'categoria' => 'nullable|string|max:100',
        ]);
        Supplier::create($validated);
        return redirect()->route('suppliers.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit(Supplier $supplier)
    {
        return view('admin.suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'documento' => 'required|string|max:30',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'categoria' => 'nullable|string|max:100',
        ]);
        $supplier->update($validated);
        return redirect()->route('suppliers.index')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index')->with('success', 'Fornecedor removido com sucesso!');
    }

    public function show(Supplier $supplier)
    {
        return view('admin.suppliers.show', compact('supplier'));
    }
} 