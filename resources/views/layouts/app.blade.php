<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Meu Futuro') }} - Gestão Financeira</title>
        <meta name="description" content="Futuro - Seu aplicativo de gestão financeira pessoal. Organize suas compras, categorias e relatórios de forma simples e eficiente.">

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23059669'%3E%3Cpath d='M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1H5C3.89 1 3 1.89 3 3V19A2 2 0 0 0 5 21H19A2 2 0 0 0 21 19V9M19 9H14V4H5V19H19V9Z'/%3E%3C/svg%3E">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Styles -->
        <style>
            /* Gradiente personalizado para o Futuro */
            .bg-futuro-gradient {
                background: linear-gradient(135deg, #059669 0%, #2563eb 100%);
            }

            .bg-futuro-light {
                background: linear-gradient(135deg, #ecfdf5 0%, #eff6ff 100%);
            }

            /* Animação suave para transições */
            .transition-all-smooth {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            /* Sombra personalizada */
            .shadow-futuro {
                box-shadow: 0 10px 25px -3px rgba(5, 150, 105, 0.1), 0 4px 6px -2px rgba(5, 150, 105, 0.05);
            }

            /* Scrollbar personalizada */
            ::-webkit-scrollbar {
                width: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f5f9;
            }

            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #059669, #2563eb);
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(135deg, #047857, #1d4ed8);
            }

            /* Loading animation */
            .loading-spinner {
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-futuro-light min-h-screen">
        <div class="min-h-screen">
            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow-futuro relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-futuro-gradient opacity-95"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

                    <!-- Content -->
                    <div class="relative max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="relative">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-30 pointer-events-none">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-50/50 via-transparent to-blue-50/50"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 mt-auto">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                                <span class="text-lg font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">
                                    Meu Futuro
                                </span>
                            </div>
                            <span class="text-sm text-gray-500">
                                © {{ date('Y') }} - Gestão Financeira Inteligente
                            </span>
                        </div>

                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                            <span>Versão 1.0</span>
                            <span>•</span>
                            <span>Desenvolvido com ❤️</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Loading Overlay (opcional para futuras implementações) -->
        <div id="loading-overlay" class="fixed inset-0 bg-white/80 backdrop-blur-sm z-50 hidden">
            <div class="flex items-center justify-center min-h-screen">
                <div class="text-center">
                    <div class="w-12 h-12 border-4 border-emerald-200 border-t-emerald-600 rounded-full loading-spinner mx-auto mb-4"></div>
                    <p class="text-gray-600">Carregando...</p>
                </div>
            </div>
        </div>

        <!-- Scripts adicionais -->
        <script>
            // Função para mostrar/ocultar loading
            window.showLoading = function() {
                document.getElementById('loading-overlay').classList.remove('hidden');
            };

            window.hideLoading = function() {
                document.getElementById('loading-overlay').classList.add('hidden');
            };

            // Smooth scroll para links internos
            document.addEventListener('DOMContentLoaded', function() {
                const links = document.querySelectorAll('a[href^="#"]');
                links.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>

