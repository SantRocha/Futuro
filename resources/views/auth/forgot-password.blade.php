<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-gradient-to-r from-emerald-100 to-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Esqueceu sua senha?</h2>
        <p class="text-gray-600 leading-relaxed">
            Sem problemas! Digite seu endereço de email e enviaremos um link para redefinir sua senha.
        </p>
    </div>

    <!-- Session Status -->
    @if(session('status'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-green-800 font-medium">{{ session('status') }}</span>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Endereço de Email
            </label>
            <input id="email"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   required
                   autofocus
                   placeholder="Digite o email da sua conta"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200 bg-white/80" />
            @if($errors->get('email'))
                <div class="mt-2 text-sm text-red-600">
                    @foreach($errors->get('email') as $error)
                        <p class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Instructions -->
        <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
            <h4 class="text-sm font-medium text-blue-800 mb-2">
                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Como funciona:
            </h4>
            <ol class="text-sm text-blue-700 space-y-1 list-decimal list-inside">
                <li>Digite o email associado à sua conta</li>
                <li>Clique em "Enviar Link de Redefinição"</li>
                <li>Verifique sua caixa de entrada (e spam)</li>
                <li>Clique no link recebido por email</li>
                <li>Crie uma nova senha segura</li>
            </ol>
        </div>

        <!-- Submit Button -->
        <div class="space-y-4">
            <button type="submit"
                    class="w-full flex items-center justify-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Enviar Link de Redefinição
            </button>

            <!-- Back to Login -->
            <div class="text-center">
                <a href="{{ route('login') }}"
                   class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 transition duration-200">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Voltar ao login
                </a>
            </div>
        </div>
    </form>

    <!-- Help Section -->
    <div class="mt-8 pt-6 border-t border-gray-200">
        <div class="text-center">
            <h4 class="text-sm font-medium text-gray-700 mb-3">Precisa de ajuda?</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    Não recebeu o email? Verifique sua pasta de spam
                </div>
                <div class="flex items-center justify-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Lembre-se: o link expira em 60 minutos
                </div>
                <div class="flex items-center justify-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Seus dados estão seguros conosco
                </div>
            </div>
        </div>
    </div>

    <!-- Alternative Options -->
    <div class="mt-6 text-center">
        <p class="text-sm text-gray-500 mb-3">Outras opções:</p>
        <div class="flex items-center justify-center space-x-4 text-sm">
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="text-emerald-600 hover:text-emerald-700 font-medium transition duration-200">
                    Criar nova conta
                </a>
            @endif
            <span class="text-gray-300">•</span>
            <a href="#"
               class="text-blue-600 hover:text-blue-700 font-medium transition duration-200">
                Contatar suporte
            </a>
        </div>
    </div>
</x-guest-layout>
