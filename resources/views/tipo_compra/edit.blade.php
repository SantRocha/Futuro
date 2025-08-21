<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Editar Tipo de Compra
            </h2>
            <p class="text-emerald-100 mt-2">Atualize as informações da categoria "{{ $tipo->nome_tipo_compra }}"</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <form action="{{ route('tipo_compra.update', $tipo->id_tipo_compra) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Nome do Tipo de Compra -->
                        <div>
                            <label for="nome_tipo_compra" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Nome da Categoria
                            </label>
                            <input type="text"
                                   name="nome_tipo_compra"
                                   id="nome_tipo_compra"
                                   value="{{ $tipo->nome_tipo_compra }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                            <p class="mt-2 text-sm text-gray-500">
                                💡 Dica: Use nomes claros e específicos para facilitar a organização das suas compras
                            </p>
                        </div>

                        <!-- Informações da Categoria -->
                        <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                            <h4 class="text-sm font-medium text-blue-800 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Informações da Categoria
                            </h4>
                            <div class="text-sm text-blue-700">
                                <p><strong>ID:</strong> {{ $tipo->id_tipo_compra }}</p>
                                <p><strong>Nome Atual:</strong> {{ $tipo->nome_tipo_compra }}</p>
                                <p class="mt-2 text-blue-600">
                                    ⚠️ Alterar o nome desta categoria afetará todas as compras já cadastradas com esta categoria.
                                </p>
                            </div>
                        </div>

                        <!-- Exemplos de Categorias -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-gray-700 mb-3">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Sugestões de Categorias
                            </h4>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 text-sm text-gray-600">
                                <span class="bg-white px-3 py-1 rounded-full">🍽️ Alimentação</span>
                                <span class="bg-white px-3 py-1 rounded-full">🚗 Transporte</span>
                                <span class="bg-white px-3 py-1 rounded-full">🏥 Saúde</span>
                                <span class="bg-white px-3 py-1 rounded-full">🎮 Lazer</span>
                                <span class="bg-white px-3 py-1 rounded-full">🏠 Casa</span>
                                <span class="bg-white px-3 py-1 rounded-full">👕 Vestuário</span>
                                <span class="bg-white px-3 py-1 rounded-full">📚 Educação</span>
                                <span class="bg-white px-3 py-1 rounded-full">💼 Trabalho</span>
                                <span class="bg-white px-3 py-1 rounded-full">🎁 Presentes</span>
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                            <a href="{{ route('tipo_compra.index') }}"
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
                                Atualizar Categoria
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

