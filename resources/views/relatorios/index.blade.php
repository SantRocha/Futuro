{{-- resources/views/relatorios/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Relatórios de Compras
            </h2>
            <p class="text-emerald-100 mt-2">Gere relatórios detalhados das suas compras e gastos</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <!-- Título da Seção -->
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Configurar Relatório</h3>
                        <p class="text-gray-600">Escolha as opções para gerar seu relatório personalizado</p>
                    </div>

                    <form action="{{ route('relatorio.gerar') }}" method="POST" class="space-y-8">
                        @csrf

                        <!-- Grid para as opções -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Tipo de Relatório -->
                            <div>
                                <label for="modo_relatorio" class="block text-sm font-medium text-gray-700 mb-3">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Tipo de Relatório
                                </label>
                                <select name="modo_relatorio"
                                        id="modo_relatorio"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                    <option value="simples">📊 Relatório Simples</option>
                                    <option value="completo">📈 Relatório Completo</option>
                                </select>
                                <div class="mt-2 text-sm text-gray-500">
                                    <div class="space-y-1">
                                        <p><strong>Simples:</strong> Lista básica com totais</p>
                                        <p><strong>Completo:</strong> Inclui itens, categorias e formas de pagamento</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Período -->
                            <div>
                                <label for="periodo" class="block text-sm font-medium text-gray-700 mb-3">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Período
                                </label>
                                <select name="periodo"
                                        id="periodo"
                                        onchange="document.getElementById('intervalo').style.display = this.value === 'intervalo' ? 'block' : 'none'"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                    <option value="mensal">📅 Mensal</option>
                                    <option value="anual">🗓️ Anual</option>
                                    <option value="intervalo">📆 Intervalo Personalizado</option>
                                </select>
                            </div>
                        </div>

                        <!-- Intervalo Personalizado -->
                        <div id="intervalo" style="display: none;" class="bg-blue-50 rounded-lg p-6 border border-blue-200">
                            <h4 class="text-lg font-semibold text-blue-800 mb-4">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Definir Período Personalizado
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="data_inicio" class="block text-sm font-medium text-blue-700 mb-2">Data de Início</label>
                                    <input type="date"
                                           name="data_inicio"
                                           id="data_inicio"
                                           class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                </div>
                                <div>
                                    <label for="data_fim" class="block text-sm font-medium text-blue-700 mb-2">Data de Fim</label>
                                    <input type="date"
                                           name="data_fim"
                                           id="data_fim"
                                           class="w-full px-4 py-3 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                </div>
                            </div>
                        </div>

                        <!-- Informações sobre os Relatórios -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                O que cada relatório inclui
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white p-4 rounded-lg border border-gray-200">
                                    <h5 class="font-semibold text-emerald-600 mb-2">📊 Relatório Simples</h5>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Nome das compras</li>
                                        <li>• Data de cada compra</li>
                                        <li>• Valor total por compra</li>
                                        <li>• Total geral do período</li>
                                    </ul>
                                </div>
                                <div class="bg-white p-4 rounded-lg border border-gray-200">
                                    <h5 class="font-semibold text-blue-600 mb-2">📈 Relatório Completo</h5>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Tudo do relatório simples</li>
                                        <li>• Categoria de cada compra</li>
                                        <li>• Forma de pagamento</li>
                                        <li>• Lista detalhada de itens</li>
                                        <li>• Quantidade e preço por item</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Gerar -->
                        <div class="text-center pt-6 border-t border-gray-200">
                            <button type="submit"
                                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium text-lg rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Gerar Relatório
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Dicas -->
            <div class="mt-6 bg-blue-50 rounded-lg p-4 border border-blue-200">
                <h4 class="text-sm font-medium text-blue-800 mb-2">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    Dicas para Relatórios
                </h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Use o relatório simples para visões gerais rápidas</li>
                    <li>• O relatório completo é ideal para análises detalhadas</li>
                    <li>• Você poderá exportar o resultado em PDF</li>
                    <li>• Períodos personalizados são úteis para análises específicas</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

