<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compra;
use App\Models\TipoCompra;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();

        // Mês/ano atual como padrão
        $mes = $request->input('mes', now()->format('m'));
        $ano = $request->input('ano', now()->format('Y'));

        // Base query
        $query = Compra::with(['tipoCompra', 'user'])
            ->where('user_id', $userId);

        // Se não for "todo o período" aplica o filtro
        if (!($request->has('periodo') && $request->input('periodo') === 'todos')) {
            $query->whereMonth('created_at', $mes)
                ->whereYear('created_at', $ano);
        }

        $compras = $query->orderBy('id_compra', 'desc')->get();
        $totalGeral = $compras->sum('total_compra');

        // Lista de meses/anos existentes no banco para montar o filtro
        $mesesDisponiveis = Compra::selectRaw('YEAR(created_at) as ano, MONTH(created_at) as mes')
            ->where('user_id', $userId)
            ->groupBy('ano', 'mes')
            ->orderBy('ano', 'desc')
            ->orderBy('mes', 'desc')
            ->get();

        return view('compra.index', compact('compras', 'totalGeral', 'mesesDisponiveis', 'mes', 'ano'));
    }

    public function create()
    {
        $tipos = TipoCompra::where('user_id', auth()->id())->get();
        $usuarios = User::all();
        return view('compra.create', compact('tipos', 'usuarios'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_compra' => 'required|string|max:255',
            'id_tipo_compra_fk' => 'required|exists:tipo_compra,id_tipo_compra',
            'pagamento' => 'nullable|in:DINHEIRO,PIX,CARTAO DEBITO,CARTAO CREDITO,OUTRO',
        ]);

        $userId = Auth::id();

        // Verifica se o tipo de compra realmente pertence ao usuário
        $tipoCompraPertence = \App\Models\TipoCompra::where('id_tipo_compra', $request->id_tipo_compra_fk)
            ->where('user_id', $userId)
            ->exists();

        if (!$tipoCompraPertence) {
            return redirect()->back()
                ->withErrors(['id_tipo_compra_fk' => 'Tipo de compra inválido.'])
                ->withInput();
        }

        $data = $request->all();
        $data['user_id'] = $userId;
        $data['total_compra'] = 0;

        // Cria a compra e pega o objeto criado
        $compra = Compra::create($data);

        // Redireciona para a rota de itens dessa compra recém-criada
        return redirect()->route('itens.index', $compra->id_compra)
            ->with('success', 'Compra criada com sucesso.');
    }

    public function edit($id)
    {
        $compra = Compra::where('id_compra', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $tipos = TipoCompra::all();
        $usuarios = User::all(); // Pode remover se não quiser trocar de usuário

        return view('compra.edit', compact('compra', 'tipos', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_compra' => 'required|string|max:255',
            'id_tipo_compra_fk' => 'required|exists:tipo_compra,id_tipo_compra',
            'pagamento' => 'nullable|in:DINHEIRO,PIX,CARTAO DEBITO,CARTAO CREDITO,OUTRO',
        ]);

        $compra = Compra::where('id_compra', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $total = $compra->items->sum(fn($item) => $item->preco_item * $item->quantidade_item);

        $compra->update([
            'nome_compra' => $request->input('nome_compra'),
            'id_tipo_compra_fk' => $request->input('id_tipo_compra_fk'),
            'pagamento' => $request->input('pagamento'),
            'total_compra' => $total,
        ]);

        return redirect()->route('compra.index')->with('success', 'Compra atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $compra = Compra::where('id_compra', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $compra->delete();

        return redirect()->route('compra.index')->with('success', 'Compra deletada com sucesso.');
    }
}
