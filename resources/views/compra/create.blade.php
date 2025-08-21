<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Nova Compra
            </h2>
            <p class="text-emerald-100 mt-2">Adicione uma nova compra ao seu controle financeiro</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <form action="{{ route('compra.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Nome da Compra -->
                        <div>
                            <label for="nome_compra" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                Nome da Compra
                            </label>
                            <input type="text"
                                   name="nome_compra"
                                   id="nome_compra"
                                   placeholder="Ex: Supermercado, Combustível, Farmácia..."
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                        </div>

                        <!-- Tipo de Compra -->
                        <div>
                            <label for="id_tipo_compra_fk" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Categoria
                            </label>
                            <select name="id_tipo_compra_fk"
                                    id="id_tipo_compra_fk"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                <option value="">Selecione uma categoria</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id_tipo_compra }}">{{ $tipo->nome_tipo_compra }}</option>
                                @endforeach
                            </select>
                        </div>

                        @if (1 === 0)
                            <!-- Total da Compra (Hidden) -->
                            <input type="hidden" name="total_compra" value="0">

                            <!-- User ID (Hidden) -->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        @endif

                        <!-- Forma de Pagamento -->
                        <div>
                            <label for="pagamento" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                Forma de Pagamento
                            </label>
                            <select name="pagamento"
                                    id="pagamento"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                <option value="">Selecione a forma de pagamento</option>
                                <option value="DINHEIRO">💵 Dinheiro</option>
                                <option value="PIX">📱 PIX</option>
                                <option value="CARTAO DEBITO">💳 Cartão de Débito</option>
                                <option value="CARTAO CREDITO">💳 Cartão de Crédito</option>
                                <option value="OUTRO">🔄 Outro</option>
                            </select>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                            <a href="{{ route('compra.index') }}"
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
                                Salvar Compra
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

