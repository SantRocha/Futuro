<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Perfil do Usuário
            </h2>
            <p class="text-emerald-100 mt-2">Gerencie suas informações pessoais e configurações de conta</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Informações do Perfil -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 border-l-4 border-emerald-500 bg-gradient-to-r from-emerald-50 to-blue-50">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-800">Informações do Perfil</h3>
                    </div>
                    <p class="text-sm text-gray-600">Atualize as informações da sua conta e endereço de email.</p>
                </div>
                <div class="p-8">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Atualizar Senha -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 border-l-4 border-blue-500 bg-gradient-to-r from-blue-50 to-indigo-50">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-800">Atualizar Senha</h3>
                    </div>
                    <p class="text-sm text-gray-600">Certifique-se de que sua conta está usando uma senha longa e aleatória para manter-se seguro.</p>
                </div>
                <div class="p-8">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Excluir Conta -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 border-l-4 border-red-500 bg-gradient-to-r from-red-50 to-pink-50">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-800">Zona de Perigo</h3>
                    </div>
                    <p class="text-sm text-gray-600">Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente deletados.</p>
                </div>
                <div class="p-8">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

            <!-- Dicas de Segurança -->
            <div class="bg-blue-50 rounded-lg p-6 border border-blue-200">
                <h4 class="text-sm font-medium text-blue-800 mb-3">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    Dicas de Segurança
                </h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Use uma senha forte com pelo menos 8 caracteres</li>
                    <li>• Inclua letras maiúsculas, minúsculas, números e símbolos</li>
                    <li>• Mantenha seu email sempre atualizado para recuperação de conta</li>
                    <li>• Faça backup dos seus dados importantes antes de excluir a conta</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

