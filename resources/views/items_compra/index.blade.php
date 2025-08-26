<x-app-layout>
    <x-slot name="header">
        <div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                        Itens da Compra
                    </h2>
                    <p class="text-emerald-100 mt-2">Compra: <span class="font-semibold">{{ $compra->nome_compra }}</span></p>
                </div>
                <a href="{{ route('itens.create', ['compraId' => $compra->id_compra]) }}"
                   class="inline-flex items-center px-6 py-3 bg-white text-emerald-600 font-medium rounded-lg hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-white transition duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Novo Item
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Mensagem de Sucesso -->
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-green-800 font-medium">{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            <!-- Informações da Compra -->
            <div class="mb-6 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-gradient-to-r from-emerald-50 to-blue-50 border-l-4 border-emerald-500">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">{{ $compra->nome_compra }}</h3>
                                <p class="text-sm text-gray-600">Gerencie os itens desta compra</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-600">Total de Itens</p>
                            <p class="text-2xl font-bold text-emerald-600">{{ $itens ? $itens->count() : 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de Itens -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    @if($itens && $itens->count() > 0)
                        <!-- Cabeçalho da Tabela (Desktop) -->
                        <div class="hidden md:grid md:grid-cols-12 gap-4 pb-4 border-b border-gray-200 text-sm font-medium text-gray-700">
                            <div class="col-span-4">Item</div>
                            <div class="col-span-2 text-center">Preço Unit.</div>
                            <div class="col-span-2 text-center">Quantidade</div>
                            <div class="col-span-2 text-center">Total</div>
                            <div class="col-span-2 text-center">Ações</div>
                        </div>

                        <!-- Lista de Itens -->
                        <div class="space-y-4 mt-4">
                            @php $totalGeral = 0; @endphp
                            @foreach($itens as $item)
                                @php
                                    $totalItem = $item->preco_item * $item->quantidade_item;
                                    $totalGeral += $totalItem;
                                @endphp

                                <!-- Item Card (Mobile) / Row (Desktop) -->
                                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition duration-200 md:border-0 md:rounded-none md:p-0 md:hover:bg-gray-50">
                                    <div class="md:grid md:grid-cols-12 md:gap-4 md:items-center md:py-4">
                                        <!-- Nome do Item -->
                                        <div class="md:col-span-4 mb-3 md:mb-0">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-gradient-to-br from-emerald-100 to-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h4 class="font-semibold text-gray-900">{{ $item->nome_item }}</h4>
                                                    <p class="text-sm text-gray-500 md:hidden">ID: {{ $item->id_item }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Informações do Item (Mobile) -->
                                        <div class="grid grid-cols-3 gap-4 mb-4 md:hidden">
                                            <div class="text-center">
                                                <p class="text-xs text-gray-500 mb-1">Preço Unit.</p>
                                                <p class="font-semibold text-emerald-600">R$ {{ number_format($item->preco_item, 2, ',', '.') }}</p>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-xs text-gray-500 mb-1">Quantidade</p>
                                                <p class="font-semibold">{{ $item->quantidade_item }}</p>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-xs text-gray-500 mb-1">Total</p>
                                                <p class="font-bold text-blue-600">R$ {{ number_format($totalItem, 2, ',', '.') }}</p>
                                            </div>
                                        </div>

                                        <!-- Informações do Item (Desktop) -->
                                        <div class="hidden md:block md:col-span-2 text-center">
                                            <span class="font-semibold text-emerald-600">R$ {{ number_format($item->preco_item, 2, ',', '.') }}</span>
                                        </div>
                                        <div class="hidden md:block md:col-span-2 text-center">
                                            <span class="font-semibold">{{ $item->quantidade_item }}</span>
                                        </div>
                                        <div class="hidden md:block md:col-span-2 text-center">
                                            <span class="font-bold text-blue-600">R$ {{ number_format($totalItem, 2, ',', '.') }}</span>
                                        </div>

                                        <!-- Ações -->
                                        <div class="md:col-span-2">
                                            <div class="flex items-center justify-center space-x-2">
                                                <a href="{{ route('itens.edit', [$compra->id_compra, $item->id_item]) }}"
                                                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                    </svg>
                                                    Editar
                                                </a>

                                                <form action="{{ route('itens.destroy', [$compra->id_compra, $item->id_item]) }}" method="POST" class="inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                                                            data-item-name="{{ $item->nome_item }}"
                                                            data-item-price="{{ number_format($item->preco_item, 2, ',', '.') }}"
                                                            data-item-quantity="{{ $item->quantidade_item }}">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                        Remover
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Total Geral -->
                        <div class="mt-8 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg p-6 border border-emerald-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Total da Compra</h3>
                                        <p class="text-sm text-gray-600">{{ $itens->count() }} {{ $itens->count() == 1 ? 'item' : 'itens' }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-3xl font-bold text-emerald-600">R$ {{ number_format($totalGeral, 2, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Estado Vazio -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Nenhum item encontrado</h3>
                            <p class="text-gray-500 mb-6">Comece adicionando itens a esta compra.</p>
                            <a href="{{ route('itens.create', ['compraId' => $compra->id_compra]) }}"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Adicionar Primeiro Item
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Navegação -->
            <div class="mt-6 flex items-center justify-between">
                <a href="{{ route('compra.index') }}"
                   class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Voltar às Compras
                </a>

                @if($itens && $itens->count() > 0)
                    <div class="text-sm text-gray-500">
                        Total de {{ $itens->count() }} {{ $itens->count() == 1 ? 'item' : 'itens' }} nesta compra
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative p-4 top-20 mx-auto border w-96 shadow-lg rounded-xl bg-white">
            <!-- Header do Modal -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Confirmar Exclusão</h3>
                </div>
                <button type="button" onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-600 transition duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Conteúdo do Modal -->
            <div class="mb-6">
                <p class="text-gray-700 mb-4">
                    Tem certeza que deseja remover este item? Esta ação não pode ser desfeita.
                </p>

                <!-- Informações do Item -->
                <div id="itemInfo" class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-100 to-orange-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 id="itemName" class="font-semibold text-gray-900">Nome do Item</h4>
                            <p id="itemDetails" class="text-sm text-gray-600">Detalhes do item</p>
                        </div>
                    </div>
                </div>

                <!-- Aviso sobre consequências -->
                <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-red-800">Atenção!</p>
                            <p class="text-sm text-red-700">O item será removido permanentemente da compra e o total será recalculado.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botões de Ação -->
            <div class="flex items-center justify-end space-x-3">
                <button type="button"
                        onclick="closeDeleteModal()"
                        class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                    Cancelar
                </button>
                <button type="button"
                        id="confirmDeleteBtn"
                        onclick="confirmDelete()"
                        class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200 font-medium">
                    <span id="deleteButtonText">Remover Item</span>
                    <svg id="deleteButtonSpinner" class="hidden animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript para controlar o modal -->
    <script>
        let currentDeleteForm = null;

        // Função para abrir o modal de exclusão
        function openDeleteModal(form, itemName, itemPrice, itemQuantity) {
            currentDeleteForm = form;

            // Preencher informações do item no modal
            document.getElementById('itemName').textContent = itemName;
            document.getElementById('itemDetails').textContent = `Preço: R$ ${itemPrice} | Quantidade: ${itemQuantity}`;

            // Mostrar o modal
            document.getElementById('deleteModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Focar no botão de cancelar para acessibilidade
            setTimeout(() => {
                document.querySelector('#deleteModal button[onclick="closeDeleteModal()"]').focus();
            }, 100);
        }

        // Função para fechar o modal
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            currentDeleteForm = null;

            // Resetar estado do botão
            const deleteBtn = document.getElementById('confirmDeleteBtn');
            const deleteText = document.getElementById('deleteButtonText');
            const deleteSpinner = document.getElementById('deleteButtonSpinner');

            deleteBtn.disabled = false;
            deleteText.textContent = 'Remover Item';
            deleteSpinner.classList.add('hidden');
        }

        // Função para confirmar a exclusão
        function confirmDelete() {
            if (!currentDeleteForm) return;

            // Mostrar loading no botão
            const deleteBtn = document.getElementById('confirmDeleteBtn');
            const deleteText = document.getElementById('deleteButtonText');
            const deleteSpinner = document.getElementById('deleteButtonSpinner');

            deleteBtn.disabled = true;
            deleteText.textContent = 'Removendo...';
            deleteSpinner.classList.remove('hidden');

            // Submeter o formulário após um pequeno delay
            setTimeout(() => {
                currentDeleteForm.submit();
            }, 500);
        }

        // Inicializar event listeners quando a página carregar
        document.addEventListener('DOMContentLoaded', function() {
            // Adicionar event listeners para todos os botões de exclusão
            const deleteButtons = document.querySelectorAll('.delete-form button[type="submit"]');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const form = this.closest('form');
                    const itemName = this.getAttribute('data-item-name');
                    const itemPrice = this.getAttribute('data-item-price');
                    const itemQuantity = this.getAttribute('data-item-quantity');

                    openDeleteModal(form, itemName, itemPrice, itemQuantity);
                });
            });

            // Fechar modal ao clicar fora dele
            document.getElementById('deleteModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeDeleteModal();
                }
            });

            // Fechar modal com a tecla ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !document.getElementById('deleteModal').classList.contains('hidden')) {
                    closeDeleteModal();
                }
            });
        });
    </script>

    <!-- CSS adicional para animações -->
    <style>
        /* Animação de entrada do modal */
        #deleteModal:not(.hidden) {
            animation: fadeIn 0.3s ease-out;
        }

        #deleteModal:not(.hidden) > div {
            animation: slideIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Melhorar a responsividade do modal */
        @media (max-width: 640px) {
            #deleteModal > div {
                width: 90%;
                margin: 20px auto;
                top: 10px;
            }
        }

        /* Estilo para o backdrop blur */
        #deleteModal {
            backdrop-filter: blur(4px);
        }
    </style>
</x-app-layout>
