<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;


class RelatorioController extends Controller
{
    public function index()
    {
        return view('relatorios.index');
    }

    public function gerar(Request $request)
    {
        $query = Compra::with(['tipoCompra', 'itens'])
            ->where('user_id', auth()->id());

        if ($request->periodo === 'mensal') {
            $query->whereMonth('created_at', Carbon::now()->month);
        } elseif ($request->periodo === 'anual') {
            $query->whereYear('created_at', Carbon::now()->year);
        } elseif ($request->periodo === 'intervalo') {
            $query->whereBetween('created_at', [$request->data_inicio, $request->data_fim]);
        }

        $compras = $query->get();

        $total = $compras->sum('total_compra');

        return view('relatorios.resultado', [
            'compras' => $compras,
            'total' => $total,
            'modo' => $request->modo_relatorio,
        ]);
    }

    public function exportarPdf(Request $request)
    {
        $query = Compra::with(['tipoCompra', 'itens'])
            ->where('user_id', auth()->id());

        if ($request->periodo === 'mensal') {
            $query->whereMonth('created_at', Carbon::now()->month);
        } elseif ($request->periodo === 'anual') {
            $query->whereYear('created_at', Carbon::now()->year);
        } elseif ($request->periodo === 'intervalo') {
            $query->whereBetween('created_at', [$request->data_inicio, $request->data_fim]);
        }

        $compras = $query->get();
        $total = $compras->sum('total_compra');

        $pdf = PDF::loadView('relatorios.pdf', [
            'compras' => $compras,
            'total' => $total,
            'modo' => $request->modo_relatorio,
        ]);

        return $pdf->download('relatorio_compras.pdf');
    }
}
