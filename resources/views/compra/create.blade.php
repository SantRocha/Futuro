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
            <!-- Verificação se não há categorias -->
            @if($tipos->count() == 0)
                <!-- Aviso de Nenhuma Categoria -->
                <div class="mb-6 bg-amber-50 border border-amber-200 rounded-lg p-6">
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-amber-600 mr-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-amber-800 mb-2">Nenhuma categoria encontrada</h3>
                            <p class="text-amber-700 mb-4">
                                Para criar uma nova compra, você precisa ter pelo menos uma categoria cadastrada.
                                As categorias ajudam a organizar e classificar seus gastos.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="{{ route('tipo_compra.create') }}"
                                   class="inline-flex items-center px-6 py-3 bg-amber-600 text-black font-medium rounded-lg hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 transition duration-200 shadow-lg">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Cadastrar Primeira Categoria
                                </a>
                                <a href="{{ route('tipo_compra.index') }}"
                                   class="inline-flex items-center px-6 py-3 border border-amber-300 text-amber-700 bg-white rounded-lg hover:bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    Ver Todas as Categorias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

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
                                   @if($tipos->count() == 0) disabled @endif
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200 @if($tipos->count() == 0) bg-gray-100 text-gray-500 cursor-not-allowed @endif">
                        </div>

                        <!-- Tipo de Compra -->
                        <div>
                            <label for="id_tipo_compra_fk" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Categoria
                            </label>

                            @if($tipos->count() > 0)
                                <select name="id_tipo_compra_fk"
                                        id="id_tipo_compra_fk"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200">
                                    <option value="">Selecione uma categoria</option>
                                    @foreach($tipos as $tipo)
                                        <option value="{{ $tipo->id_tipo_compra }}">{{ $tipo->nome_tipo_compra }}</option>
                                    @endforeach
                                </select>
                            @else
                                <div class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
                                    <div class="flex items-center justify-between">
                                        <span>Nenhuma categoria disponível</span>
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Campo hidden para evitar erro de validação -->
                                <input type="hidden" name="id_tipo_compra_fk" value="">
                            @endif
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
                                    @if($tipos->count() == 0) disabled @endif
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200 @if($tipos->count() == 0) bg-gray-100 text-gray-500 cursor-not-allowed @endif">
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
                                    @if($tipos->count() == 0) disabled @endif
                                    class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg @if($tipos->count() == 0) opacity-50 cursor-not-allowed @endif">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Salvar Compra
                            </button>
                        </div>
                    </form>

                    <!-- Dica adicional quando não há categorias -->
                    @if($tipos->count() == 0)
                        <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <h4 class="text-sm font-medium text-blue-800 mb-2">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Sugestões de Categorias
                            </h4>
                            <p class="text-sm text-blue-700 mb-3">Aqui estão algumas ideias de categorias que você pode criar:</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">🛒 Supermercado</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">⛽ Combustível</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">💊 Farmácia</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">🍕 Restaurante</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">👕 Roupas</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">🏠 Casa</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
