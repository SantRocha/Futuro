<section class="space-y-6">
    <!-- Aviso de Perigo -->
    <div class="bg-red-50 border border-red-200 rounded-lg p-6">
        <div class="flex items-start">
            <svg class="w-6 h-6 text-red-600 mr-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
            </svg>
            <div>
                <h4 class="text-lg font-semibold text-red-800 mb-2">⚠️ Ação Irreversível</h4>
                <p class="text-sm text-red-700 leading-relaxed">
                    Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente deletados.
                    Antes de excluir sua conta, faça o download de qualquer dado ou informação que você deseja manter.
                </p>
            </div>
        </div>
    </div>

    <!-- O que será perdido -->
    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
        <h4 class="text-sm font-medium text-yellow-800 mb-3">
            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
            O que será permanentemente excluído:
        </h4>
        <ul class="text-sm text-yellow-700 space-y-1">
            <li>• 🛒 Todas as suas compras registradas</li>
            <li>• 📊 Histórico de relatórios e análises</li>
            <li>• 🏷️ Categorias personalizadas criadas</li>
            <li>• 📋 Todos os itens e detalhes de compras</li>
            <li>• 👤 Informações do perfil e configurações</li>
            <li>• 🔐 Acesso à conta e dados de login</li>
        </ul>
    </div>

    <!-- Botão de Exclusão -->
    <div class="text-center py-6">
        <button x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200 shadow-lg">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
            Excluir Minha Conta
        </button>
    </div>

    <!-- Modal de Confirmação -->
    <div x-data="{ show: {{ $errors->userDeletion->isNotEmpty() ? 'true' : 'false' }} }"
         x-on:open-modal.window="$event.detail == 'confirm-user-deletion' ? show = true : null"
         x-on:close.stop="show = false"
         x-on:keydown.escape.window="show = false"
         x-show="show"
         class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
         style="display: none;">

        <!-- Overlay -->
        <div x-show="show"
             class="fixed inset-0 transform transition-all"
             x-on:click="show = false"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal -->
        <div x-show="show"
             class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-md sm:mx-auto"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <!-- Cabeçalho do Modal -->
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Confirmar Exclusão</h2>
                        <p class="text-sm text-gray-600">Esta ação não pode ser desfeita</p>
                    </div>
                </div>

                <!-- Conteúdo do Modal -->
                <div class="mb-6">
                    <p class="text-sm text-gray-700 mb-4">
                        Tem certeza de que deseja excluir sua conta? Uma vez excluída, todos os seus recursos e dados serão permanentemente deletados.
                    </p>

                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                        <p class="text-sm text-red-700">
                            <strong>⚠️ Última chance:</strong> Digite sua senha para confirmar que você realmente deseja excluir sua conta permanentemente.
                        </p>
                    </div>
                </div>

                <!-- Campo de Senha -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Confirme sua senha
                    </label>
                    <input id="password"
                           name="password"
                           type="password"
                           placeholder="Digite sua senha para confirmar"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200" />

                    @if($errors->userDeletion->get('password'))
                        <div class="mt-2 text-sm text-red-600">
                            @foreach($errors->userDeletion->get('password') as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Botões do Modal -->
                <div class="flex items-center justify-end space-x-3">
                    <button type="button"
                            x-on:click="show = false"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Cancelar
                    </button>

                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200 shadow-lg">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Excluir Conta
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Alternativas -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
        <h4 class="text-sm font-medium text-blue-800 mb-3">
            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            Antes de excluir, considere estas alternativas:
        </h4>
        <ul class="text-sm text-blue-700 space-y-1">
            <li>• 📊 Exporte seus dados importantes em relatórios PDF</li>
            <li>• 🔒 Altere sua senha se houver problemas de segurança</li>
            <li>• 📧 Atualize seu email se precisar de um novo</li>
            <li>• 💬 Entre em contato com o suporte se tiver dúvidas</li>
        </ul>
    </div>
</section>

