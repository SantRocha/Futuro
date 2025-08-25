<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ItemsCompra;
use App\Models\Compra;
use App\Models\User;


class ItemsCompraController extends Controller
{
    public function index($compraId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $itens = $compra->itens;
        return view('items_compra.index', compact('compra', 'itens'));
    }

    public function create($compraId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('items_compra.create', compact('compra'));
    }

    public function store(Request $request, $compraId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $request->validate([
            'nome_item' => 'required|string|max:255',
            'preco_item' => 'required|numeric',
            'quantidade_item' => 'required|integer|min:1',
        ]);

        ItemsCompra::create([
            'nome_item' => $request->nome_item,
            'preco_item' => $request->preco_item,
            'quantidade_item' => $request->quantidade_item,
            'id_compra_fk' => $compraId,
        ]);


        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $total = $compra->items->sum(fn($item) => $item->preco_item * $item->quantidade_item);

        $compra->update([
            'total_compra' => $total,
        ]);

        return redirect()->route('itens.index', $compraId)->with('success', 'Item adicionado com sucesso.');
    }

    public function edit($compraId, $itemId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $item = ItemsCompra::where('id_item', $itemId)
            ->where('id_compra_fk', $compraId)
            ->firstOrFail();

        return view('items_compra.edit', compact('compra', 'item'));
    }

    public function update(Request $request, $compraId, $itemId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $item = ItemsCompra::where('id_item', $itemId)
            ->where('id_compra_fk', $compraId)
            ->firstOrFail();

        $request->validate([
            'nome_item' => 'required|string|max:255',
            'preco_item' => 'required|numeric',
            'quantidade_item' => 'required|integer|min:1',
        ]);

        $item->update($request->only(['nome_item', 'preco_item', 'quantidade_item']));

        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $total = $compra->items->sum(fn($item) => $item->preco_item * $item->quantidade_item);

        $compra->update([
            'total_compra' => $total,
        ]);

        return redirect()->route('itens.index', $compraId)->with('success', 'Item atualizado com sucesso.');
    }

    public function destroy($compraId, $itemId)
    {
        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $item = ItemsCompra::where('id_item', $itemId)
            ->where('id_compra_fk', $compraId)
            ->firstOrFail();

        $item->delete();

        $compra = Compra::where('id_compra', $compraId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $total = $compra->items->sum(fn($item) => $item->preco_item * $item->quantidade_item);

        $compra->update([
            'total_compra' => $total,
        ]);

        return redirect()->route('itens.index', $compraId)->with('success', 'Item removido com sucesso.');
    }
}
