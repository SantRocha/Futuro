<x-app-layout>
    <x-slot name="header">
        <div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        Tipos de Compra
                    </h2>
                    <p class="text-emerald-100 mt-2">Gerencie as categorias para organizar suas compras</p>
                </div>
                <a href="{{ route('tipo_compra.create') }}"
                   class="inline-flex items-center px-6 py-3 bg-white text-emerald-600 font-medium rounded-lg hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-white transition duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Nova Categoria
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
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

            <!-- Lista de Tipos de Compra -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    @if($tipos->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($tipos as $tipo)
                                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition duration-200 bg-gradient-to-br from-white to-gray-50">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-100 to-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-lg font-semibold text-gray-900">{{ $tipo->nome_tipo_compra }}</h3>
                                                <p class="text-sm text-gray-500">ID: {{ $tipo->id_tipo_compra }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informações Adicionais -->
                                    <div class="mb-4 p-3 bg-gray-50 rounded-lg">
                                        <div class="flex items-center text-sm text-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>Categoria ativa no sistema</span>
                                        </div>
                                    </div>

                                    <!-- Ações -->
                                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                        <a href="{{ route('tipo_compra.edit', $tipo->id_tipo_compra) }}"
                                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            Editar
                                        </a>

                                        <form action="{{ route('tipo_compra.destroy', $tipo->id_tipo_compra) }}" method="POST" class="inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                                                    data-categoria-name="{{ $tipo->nome_tipo_compra }}"
                                                    data-categoria-id="{{ $tipo->id_tipo_compra }}">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                Deletar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Resumo -->
                        <div class="mt-8 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg p-6 border border-emerald-200">
                            <div class="flex items-center">
                                <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Total de Categorias</h3>
                                    <p class="text-3xl font-bold text-emerald-600">{{ $tipos->count() }}</p>
                                    <p class="text-sm text-gray-600 mt-1">categorias ativas no sistema</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Estado Vazio -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Nenhuma categoria encontrada</h3>
                            <p class="text-gray-500 mb-6">Comece criando categorias para organizar suas compras.</p>
                            <a href="{{ route('tipo_compra.create') }}"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Criar Primeira Categoria
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Dicas -->
            <div class="mt-6 bg-blue-50 rounded-lg p-4 border border-blue-200">
                <h4 class="text-sm font-medium text-blue-800 mb-2">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Dicas para Organizar suas Categorias
                </h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Use nomes específicos e claros para facilitar a identificação</li>
                    <li>• Crie categorias baseadas em seus hábitos de consumo</li>
                    <li>• Evite criar muitas categorias similares</li>
                    <li>• Revise periodicamente e ajuste conforme necessário</li>
                </ul>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Confirmar Exclusão</h3>
                        <p class="text-sm text-gray-500">Esta ação não pode ser desfeita</p>
                    </div>
                </div>
                <button type="button"
                        onclick="closeDeleteModal()"
                        class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Conteúdo do Modal -->
            <div class="mb-6">
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <h4 class="font-semibold text-gray-900 mb-2" id="categoriaNome">Nome da Categoria</h4>
                    <div class="text-sm text-gray-600 space-y-1">
                        <p id="categoriaDetalhes">Detalhes da categoria</p>
                    </div>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-red-800">Atenção!</p>
                            <p class="text-sm text-red-700">Esta categoria será removida permanentemente do sistema. Esta ação pode afetar compras já cadastradas com esta categoria.</p>
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
                    <span id="deleteButtonText">Deletar Categoria</span>
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
        function openDeleteModal(form, categoriaNome, categoriaId) {
            currentDeleteForm = form;

            // Preencher informações da categoria no modal
            document.getElementById('categoriaNome').textContent = categoriaNome;
            document.getElementById('categoriaDetalhes').innerHTML = `
                <strong>ID:</strong> ${categoriaId}<br>
                <strong>Status:</strong> Categoria ativa no sistema
            `;

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
            deleteText.textContent = 'Deletar Categoria';
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
            deleteText.textContent = 'Deletando...';
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
                    const categoriaNome = this.getAttribute('data-categoria-name');
                    const categoriaId = this.getAttribute('data-categoria-id');

                    openDeleteModal(form, categoriaNome, categoriaId);
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
