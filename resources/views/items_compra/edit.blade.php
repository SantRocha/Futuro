<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Editar Item
            </h2>
            <p class="text-emerald-100 mt-2">Editando item da compra: <span class="font-semibold">{{ $compra->nome_compra }}</span></p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <!-- Informações da Compra -->
            <div class="mb-6 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-gradient-to-r from-emerald-50 to-blue-50 border-l-4 border-emerald-500">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $compra->nome_compra }}</h3>
                            <p class="text-sm text-gray-600">Editando item: <span class="font-medium">{{ $item->nome_item }}</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulário -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <form action="{{ route('itens.update', [$compra->id_compra, $item->id_item]) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PATCH')

                        <!-- Nome do Item -->
                        <div>
                            <label for="nome_item" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                Nome do Item
                            </label>
                            <input type="text"
                                   name="nome_item"
                                   id="nome_item"
                                   value="{{ $item->nome_item }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                        </div>

                        <!-- Grid para Preço e Quantidade -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Preço do Item -->
                            <div>
                                <label for="preco_item" class="block text-sm font-medium text-gray-700 mb-2">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                    Preço Unitário
                                </label>
                                <div class="relative">
                                    <span class="absolute left-3 top-3 text-gray-500">R$</span>
                                    <input type="number"
                                           step="0.01"
                                           name="preco_item"
                                           id="preco_item"
                                           value="{{ $item->preco_item }}"
                                           required
                                           class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                </div>
                            </div>

                            <!-- Quantidade -->
                            <div>
                                <label for="quantidade_item" class="block text-sm font-medium text-gray-700 mb-2">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                    </svg>
                                    Quantidade
                                </label>
                                <input type="number"
                                       name="quantidade_item"
                                       id="quantidade_item"
                                       value="{{ $item->quantidade_item }}"
                                       min="1"
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                            </div>
                        </div>

                        <!-- Cálculo Automático -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Valor Total do Item
                            </h4>
                            <div class="text-2xl font-bold text-emerald-600" id="total-item">R$ {{ number_format($item->preco_item * $item->quantidade_item, 2, ',', '.') }}</div>
                            <p class="text-sm text-gray-500 mt-1">Preço × Quantidade</p>
                        </div>

                        <!-- Informações do Item -->
                        <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                            <h4 class="text-sm font-medium text-blue-800 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Informações do Item
                            </h4>
                            <div class="text-sm text-blue-700 space-y-1">
                                <p><strong>ID do Item:</strong> {{ $item->id_item }}</p>
                                <p><strong>Valor Original:</strong> R$ {{ number_format($item->preco_item * $item->quantidade_item, 2, ',', '.') }}</p>
                                <p class="text-blue-600 mt-2">
                                    ⚠️ As alterações afetarão o valor total da compra.
                                </p>
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                            <a href="{{ route('itens.index', ['compraId' => $compra->id_compra]) }}"
                               class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Cancelar
                            </a>

                            <button type="submit"
                                    class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Atualizar Item
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para Cálculo Automático -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const precoInput = document.getElementById('preco_item');
            const quantidadeInput = document.getElementById('quantidade_item');
            const totalElement = document.getElementById('total-item');

            function calcularTotal() {
                const preco = parseFloat(precoInput.value) || 0;
                const quantidade = parseInt(quantidadeInput.value) || 0;
                const total = preco * quantidade;

                totalElement.textContent = 'R$ ' + total.toLocaleString('pt-BR', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            precoInput.addEventListener('input', calcularTotal);
            quantidadeInput.addEventListener('input', calcularTotal);
        });
    </script>
</x-app-layout>

