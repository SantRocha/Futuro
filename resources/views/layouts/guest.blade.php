<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Futuro') }} - Acesso ao Sistema</title>
        <meta name="description" content="Acesse o Futuro - Seu aplicativo de gestão financeira pessoal. Faça login ou registre-se para começar a organizar suas finanças.">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('storage/imagens/favicon.svg') }}" type="image/x-icon">

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

            .bg-futuro-radial {
                background: radial-gradient(ellipse at top, #ecfdf5 0%, #eff6ff 50%, #f0f9ff 100%);
            }

            /* Animações */
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            .animate-float-delayed {
                animation: float 6s ease-in-out infinite;
                animation-delay: 2s;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .animate-fade-in {
                animation: fadeIn 1s ease-out;
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }

            /* Efeito de brilho */
            .shine-effect {
                position: relative;
                overflow: hidden;
            }

            .shine-effect::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                animation: shine 3s infinite;
            }

            @keyframes shine {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            /* Sombra personalizada */
            .shadow-futuro {
                box-shadow: 0 25px 50px -12px rgba(5, 150, 105, 0.25);
            }

            /* Pattern de fundo */
            .bg-pattern {
                background-image:
                    radial-gradient(circle at 25px 25px, rgba(5, 150, 105, 0.1) 2px, transparent 2px),
                    radial-gradient(circle at 75px 75px, rgba(37, 99, 235, 0.1) 2px, transparent 2px);
                background-size: 100px 100px;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-futuro-radial bg-pattern min-h-screen">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">

            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <!-- Floating Elements -->
                <div class="absolute top-20 left-10 w-20 h-20 bg-emerald-200/30 rounded-full animate-float"></div>
                <div class="absolute top-40 right-20 w-16 h-16 bg-blue-200/30 rounded-full animate-float-delayed"></div>
                <div class="absolute bottom-40 left-20 w-24 h-24 bg-emerald-100/40 rounded-full animate-float"></div>
                <div class="absolute bottom-20 right-10 w-18 h-18 bg-blue-100/40 rounded-full animate-float-delayed"></div>

                <!-- Gradient Orbs -->
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-r from-emerald-300/20 to-blue-300/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-r from-blue-300/20 to-emerald-300/20 rounded-full blur-3xl"></div>
            </div>

            <!-- Logo Section -->
            <div class="animate-fade-in mt-32">
                <a href="/" class="block mb-8">
                    <div class="flex items-center justify-center">
                        <!-- Logo Icon -->
                        <div class="w-16 h-16 bg-futuro-gradient rounded-2xl flex items-center justify-center mr-4 shadow-futuro shine-effect">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>

                        <!-- Logo Text -->
                        <div class="text-left">
                            <h1 class="text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">
                                Futuro
                            </h1>
                            <p class="text-sm text-gray-600 font-medium">Gestão Financeira</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Main Content Card -->
            <div class="w-full sm:max-w-md animate-fade-in">
                <div class="bg-white/80 backdrop-blur-sm shadow-futuro overflow-hidden sm:rounded-2xl border border-white/20">
                    <!-- Card Header -->
                    <div class="px-8 pt-8 pb-4">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold text-gray-900 mb-2">Bem-vindo de volta!</h2>
                            <p class="text-gray-600">Acesse sua conta para continuar organizando suas finanças</p>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="px-8 pb-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mt-12 max-w-4xl mx-auto px-4 animate-fade-in">
                <div class="text-center mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Por que escolher o Futuro?</h3>
                    <p class="text-gray-600">Simplifique sua gestão financeira com nossas ferramentas intuitivas</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Feature 1 -->
                    <div class="text-center p-6 bg-white/60 backdrop-blur-sm rounded-xl border border-white/20">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Controle Total</h4>
                        <p class="text-sm text-gray-600">Gerencie todas as suas compras e gastos em um só lugar</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center p-6 bg-white/60 backdrop-blur-sm rounded-xl border border-white/20">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Relatórios Inteligentes</h4>
                        <p class="text-sm text-gray-600">Visualize seus gastos com relatórios detalhados e insights</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center p-6 bg-white/60 backdrop-blur-sm rounded-xl border border-white/20">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Categorização</h4>
                        <p class="text-sm text-gray-600">Organize suas compras por categorias personalizadas</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-16 pb-8 text-center">
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span>© {{ date('Y') }} Futuro</span>
                    <span>•</span>
                    <span>Gestão Financeira Inteligente</span>
                    <span>•</span>
                    <span>Versão 1.0</span>
                </div>
                <div class="mt-2 text-xs text-gray-400">
                    Desenvolvido com ❤️ para simplificar sua vida financeira
                </div>
            </footer>
        </div>

        <!-- Scripts -->
        <script>
            // Adiciona efeito de parallax suave aos elementos flutuantes
            document.addEventListener('mousemove', function(e) {
                const floatingElements = document.querySelectorAll('.animate-float, .animate-float-delayed');
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                floatingElements.forEach((element, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = (mouseX - 0.5) * speed;
                    const y = (mouseY - 0.5) * speed;

                    element.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            // Animação de entrada suave
            document.addEventListener('DOMContentLoaded', function() {
                const elements = document.querySelectorAll('.animate-fade-in');
                elements.forEach((element, index) => {
                    element.style.animationDelay = `${index * 0.2}s`;
                });
            });
        </script>
    </body>
</html>

