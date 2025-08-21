<?php

namespace App\Http\Controllers;

use App\Models\TipoCompra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoCompraController extends Controller
{
    // Listar todos os registros
    public function index()
    {
        $tipos = TipoCompra::where('user_id', auth()->id())->get();
        return view('tipo_compra.index', compact('tipos'));
    }

    // Mostrar formulário de criação
    public function create()
    {
        return view('tipo_compra.create');
    }

    // Armazenar novo registro
    public function store(Request $request)
    {
        $request->validate([
            'nome_tipo_compra' => 'required|string|max:255',
        ]);

        TipoCompra::create([
            'nome_tipo_compra' => $request->input('nome_tipo_compra'),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('tipo_compra.index')->with('success', 'Tipo de compra criado com sucesso.');
    }

    // Mostrar formulário de edição
    public function edit($id)
    {
        $tipo = TipoCompra::where('id_tipo_compra', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        return view('tipo_compra.edit', compact('tipo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_tipo_compra' => 'required|string|max:255',
        ]);

        $tipo = TipoCompra::where('id_tipo_compra', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $tipo->update([
            'nome_tipo_compra' => $request->input('nome_tipo_compra'),
        ]);

        return redirect()->route('tipo_compra.index')->with('success', 'Tipo de compra atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $tipo = TipoCompra::where('id_tipo_compra', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $tipo->delete();

        return redirect()->route('tipo_compra.index')->with('success', 'Tipo de compra deletado com sucesso.');
    }
}
