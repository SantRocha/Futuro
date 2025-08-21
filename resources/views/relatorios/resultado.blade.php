{{-- resources/views/relatorios/resultado.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Relatório {{ ucfirst($modo) }}
                    </h2>
                    <p class="text-emerald-100 mt-2">
                        @if(request('periodo') === 'mensal')
                            📅 Período: Mensal
                        @elseif(request('periodo') === 'anual')
                            🗓️ Período: Anual
                        @else
                            📆 Período: {{ request('data_inicio') ? date('d/m/Y', strtotime(request('data_inicio'))) : '' }} até {{ request('data_fim') ? date('d/m/Y', strtotime(request('data_fim'))) : '' }}
                        @endif
                    </p>
                </div>
                <div class="text-right">
                    <p class="text-emerald-100 text-sm">Total de Compras</p>
                    <p class="text-3xl font-bold text-white">{{ $compras->count() }}</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Total Geral -->
            <div class="mb-6 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-gradient-to-r from-emerald-50 to-blue-50 border-l-4 border-emerald-500">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Total Geral do Período</h3>
                                <p class="text-sm text-gray-600">{{ $compras->count() }} {{ $compras->count() == 1 ? 'compra encontrada' : 'compras encontradas' }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold text-emerald-600">R$ {{ number_format($total, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de Compras -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    @if($compras->count() > 0)
                        <div class="space-y-6">
                            @foreach($compras as $compra)
                                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition duration-200">
                                    <!-- Cabeçalho da Compra -->
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-100 to-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-semibold text-gray-900">{{ $compra->nome_compra }}</h4>
                                                <p class="text-sm text-gray-500">{{ $compra->created_at->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-2xl font-bold text-emerald-600">R$ {{ number_format($compra->total_compra, 2, ',', '.') }}</p>
                                        </div>
                                    </div>

                                    @if($modo === 'completo')
                                        <!-- Informações Detalhadas -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 p-4 bg-gray-50 rounded-lg">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                </svg>
                                                <span class="text-sm text-gray-700">
                                                    <strong>Categoria:</strong> {{ $compra->tipoCompra->nome_tipo_compra }}
                                                </span>
                                            </div>
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                                </svg>
                                                <span class="text-sm text-gray-700">
                                                    <strong>Pagamento:</strong>
                                                    @if($compra->pagamento == 'DINHEIRO') 💵 Dinheiro
                                                    @elseif($compra->pagamento == 'PIX') 📱 PIX
                                                    @elseif($compra->pagamento == 'CARTAO DEBITO') 💳 Cartão de Débito
                                                    @elseif($compra->pagamento == 'CARTAO CREDITO') 💳 Cartão de Crédito
                                                    @else 🔄 {{ $compra->pagamento }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Lista de Itens -->
                                        @if($compra->itens && $compra->itens->count() > 0)
                                            <div class="mt-4">
                                                <h5 class="text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                                    </svg>
                                                    Itens da Compra ({{ $compra->itens->count() }})
                                                </h5>
                                                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                                                    @foreach($compra->itens as $item)
                                                        <div class="flex items-center justify-between p-3 {{ !$loop->last ? 'border-b border-gray-100' : '' }}">
                                                            <div class="flex items-center">
                                                                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <p class="font-medium text-gray-900">{{ $item->nome_item }}</p>
                                                                    <p class="text-sm text-gray-500">{{ $item->quantidade_item }} × R$ {{ number_format($item->preco_item, 2, ',', '.') }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <p class="font-semibold text-gray-900">R$ {{ number_format($item->preco_item * $item->quantidade_item, 2, ',', '.') }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <!-- Estado Vazio -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Nenhuma compra encontrada</h3>
                            <p class="text-gray-500 mb-6">Não há compras no período selecionado.</p>
                            <a href="{{ route('relatorio.index') }}"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Voltar aos Relatórios
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Ações -->
            @if($compras->count() > 0)
                <div class="mt-6 flex items-center justify-between">
                    <a href="{{ route('relatorio.index') }}"
                       class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Novo Relatório
                    </a>

                    <!-- Exportar PDF -->
                    <form action="{{ route('relatorio.pdf') }}" method="POST" class="inline">
                        @csrf
                        <input type="hidden" name="periodo" value="{{ request('periodo') }}">
                        <input type="hidden" name="data_inicio" value="{{ request('data_inicio') }}">
                        <input type="hidden" name="data_fim" value="{{ request('data_fim') }}">
                        <input type="hidden" name="modo_relatorio" value="{{ $modo }}">
                        <button type="submit"
                                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Exportar PDF
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

