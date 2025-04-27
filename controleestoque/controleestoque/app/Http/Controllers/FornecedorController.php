<?php

namespace App\Http\Controllers;

    use App\Models\Fornecedor;
    use Illuminate\Http\Request;

    class FornecedorController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $fornecedor = Fornecedor::all();
            return view('fornecedor.index', compact('fornecedor'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('fornecedor.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $request->validate([
                'nome' => 'required',
                'codigo' => 'required|unique:produtos',
            ]);

            Fornecedor::create($request->all());

            return redirect()->route('fornecedor.index')->with('success', 'fornecedor criado com sucesso!');
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Fornecedor $fornecedor)
        {
            return view('fornecedor.edit', compact('fornecedor'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Fornecedor $fornecedor)
        {
            $request->validate([
                'nome' => 'required',
                'codigo' => 'required|unique:produtos,codigo,' . $fornecedor->id,
            ]);

            $fornecedor->update($request->all());

            return redirect()->route('fornecedor.index')->with('success', 'fornecedor atualizado com sucesso!');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Fornecedor $fornecedor)
        {
            $fornecedor->delete();

            return redirect()->route('fornecedor.index')->with('success', 'fornecedor excluído com sucesso!');
        }
    }

