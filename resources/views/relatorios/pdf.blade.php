{{-- resources/views/relatorios/pdf.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Compras - Futuro</title>
    <style>
        /* Reset e configurações básicas */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
            background-color: #fff;
        }

        /* Cabeçalho do relatório */
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            border-bottom: 3px solid #059669;
        }

        .header h1 {
            font-size: 24px;
            color: #059669;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .header .subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 10px;
        }

        .header .info {
            font-size: 10px;
            color: #9ca3af;
        }

        /* Informações do relatório */
        .report-info {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 25px;
        }

        .report-info h3 {
            color: #059669;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .report-info .info-grid {
            display: table;
            width: 100%;
        }

        .report-info .info-item {
            display: table-cell;
            width: 33.33%;
            padding-right: 15px;
            vertical-align: top;
        }

        .report-info .info-label {
            font-weight: bold;
            color: #374151;
            font-size: 10px;
        }

        .report-info .info-value {
            color: #6b7280;
            font-size: 10px;
        }

        /* Seção de compras */
        .compras-section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 16px;
            color: #1f2937;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid #e5e7eb;
            font-weight: bold;
        }

        /* Card de compra */
        .compra {
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            margin-bottom: 20px;
            overflow: hidden;
            page-break-inside: avoid;
        }

        .compra-header {
            background-color: #f9fafb;
            padding: 12px 15px;
            border-bottom: 1px solid #e5e7eb;
        }

        .compra-title {
            font-size: 14px;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 5px;
        }

        .compra-meta {
            display: table;
            width: 100%;
        }

        .compra-meta-item {
            display: table-cell;
            width: 33.33%;
            font-size: 10px;
            color: #6b7280;
        }

        .compra-meta-label {
            font-weight: bold;
            color: #374151;
        }

        .compra-total {
            font-size: 16px;
            font-weight: bold;
            color: #059669;
            text-align: right;
            margin-top: 5px;
        }

        /* Detalhes da compra (modo completo) */
        .compra-details {
            padding: 15px;
            background-color: #fff;
        }

        .details-grid {
            display: table;
            width: 100%;
            margin-bottom: 15px;
        }

        .detail-item {
            display: table-cell;
            width: 50%;
            padding-right: 15px;
            vertical-align: top;
        }

        .detail-label {
            font-weight: bold;
            color: #374151;
            font-size: 10px;
            margin-bottom: 2px;
        }

        .detail-value {
            color: #6b7280;
            font-size: 11px;
        }

        /* Tabela de itens */
        .itens-section {
            margin-top: 15px;
        }

        .itens-title {
            font-size: 12px;
            font-weight: bold;
            color: #374151;
            margin-bottom: 8px;
        }

        .itens-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
        }

        .itens-table th {
            background-color: #f3f4f6;
            color: #374151;
            font-weight: bold;
            padding: 8px 6px;
            text-align: left;
            border: 1px solid #d1d5db;
        }

        .itens-table td {
            padding: 6px;
            border: 1px solid #e5e7eb;
            color: #6b7280;
        }

        .itens-table .item-nome {
            font-weight: 500;
            color: #374151;
        }

        .itens-table .item-preco,
        .itens-table .item-total {
            text-align: right;
            font-weight: 500;
        }

        .itens-table .item-quantidade {
            text-align: center;
        }

        /* Resumo final */
        .resumo-final {
            margin-top: 40px;
            padding: 20px;
            background-color: #f0fdf4;
            border: 2px solid #059669;
            border-radius: 8px;
            text-align: center;
        }

        .resumo-final h2 {
            font-size: 18px;
            color: #059669;
            margin-bottom: 10px;
        }

        .total-geral {
            font-size: 28px;
            font-weight: bold;
            color: #059669;
            margin-bottom: 5px;
        }

        .total-compras {
            font-size: 12px;
            color: #6b7280;
        }

        /* Rodapé */
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            font-size: 9px;
            color: #9ca3af;
        }

        /* Quebras de página */
        .page-break {
            page-break-before: always;
        }

        /* Estilos para impressão */
        @media print {
            body {
                font-size: 10px;
            }

            .compra {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <!-- Cabeçalho do Relatório -->
    <div class="header">
        <h1>FUTURO - Relatório de Compras</h1>
        <div class="subtitle">Relatório {{ ucfirst($modo) }}</div>
        <div class="info">Gerado em {{ date('d/m/Y H:i:s') }}</div>
    </div>

    <!-- Informações do Relatório -->
    <div class="report-info">
        <h3>Informações do Relatório</h3>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Tipo:</div>
                <div class="info-value">{{ ucfirst($modo) }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Total de Compras:</div>
                <div class="info-value">{{ count($compras) }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Valor Total:</div>
                <div class="info-value">R$ {{ number_format($total, 2, ',', '.') }}</div>
            </div>
        </div>
    </div>

    <!-- Seção de Compras -->
    @if(count($compras) > 0)
        <div class="compras-section">
            <h2 class="section-title">Detalhamento das Compras</h2>

            @foreach($compras as $index => $compra)
                <div class="compra">
                    <!-- Cabeçalho da Compra -->
                    <div class="compra-header">
                        <div class="compra-title">{{ $compra->nome_compra }}</div>
                        <div class="compra-meta">
                            <div class="compra-meta-item">
                                <span class="compra-meta-label">Data:</span> {{ $compra->created_at->format('d/m/Y') }}
                            </div>
                            <div class="compra-meta-item">
                                <span class="compra-meta-label">Compra #:</span> {{ $index + 1 }}
                            </div>
                            <div class="compra-meta-item">
                                <div class="compra-total">R$ {{ number_format($compra->total_compra, 2, ',', '.') }}</div>
                            </div>
                        </div>
                    </div>

                    @if($modo === 'completo')
                        <!-- Detalhes da Compra -->
                        <div class="compra-details">
                            <div class="details-grid">
                                <div class="detail-item">
                                    <div class="detail-label">Categoria:</div>
                                    <div class="detail-value">{{ $compra->tipoCompra->nome_tipo_compra ?? 'Não informado' }}</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">Forma de Pagamento:</div>
                                    <div class="detail-value">
                                        @if($compra->pagamento == 'DINHEIRO') Dinheiro
                                        @elseif($compra->pagamento == 'PIX') PIX
                                        @elseif($compra->pagamento == 'CARTAO DEBITO') Cartão de Débito
                                        @elseif($compra->pagamento == 'CARTAO CREDITO') Cartão de Crédito
                                        @else {{ $compra->pagamento }}
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Lista de Itens -->
                            @if($compra->itens && count($compra->itens) > 0)
                                <div class="itens-section">
                                    <div class="itens-title">Itens da Compra ({{ count($compra->itens) }} {{ count($compra->itens) == 1 ? 'item' : 'itens' }})</div>
                                    <table class="itens-table">
                                        <thead>
                                            <tr>
                                                <th style="width: 45%;">Item</th>
                                                <th style="width: 15%;">Qtd.</th>
                                                <th style="width: 20%;">Preço Unit.</th>
                                                <th style="width: 20%;">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($compra->itens as $item)
                                                <tr>
                                                    <td class="item-nome">{{ $item->nome_item }}</td>
                                                    <td class="item-quantidade">{{ $item->quantidade_item }}</td>
                                                    <td class="item-preco">R$ {{ number_format($item->preco_item, 2, ',', '.') }}</td>
                                                    <td class="item-total">R$ {{ number_format($item->preco_item * $item->quantidade_item, 2, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Quebra de página a cada 3 compras para evitar páginas muito cheias -->
                @if(($index + 1) % 3 == 0 && !$loop->last)
                    <div class="page-break"></div>
                @endif
            @endforeach
        </div>
    @else
        <div style="text-align: center; padding: 40px; color: #6b7280;">
            <div style="font-size: 14px; margin-bottom: 10px;">Nenhuma compra encontrada</div>
            <div style="font-size: 11px;">Não há compras no período selecionado.</div>
        </div>
    @endif

    <!-- Resumo Final -->
    <div class="resumo-final">
        <h2>Resumo Geral</h2>
        <div class="total-geral">R$ {{ number_format($total, 2, ',', '.') }}</div>
        <div class="total-compras">{{ count($compras) }} {{ count($compras) == 1 ? 'compra' : 'compras' }} no período</div>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        <div>Relatório gerado pelo sistema Futuro em {{ date('d/m/Y H:i:s') }}</div>
        <div>Este documento foi gerado automaticamente e contém informações confidenciais.</div>
    </div>
</body>
</html>

