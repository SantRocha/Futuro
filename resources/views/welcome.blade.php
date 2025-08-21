<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Futuro - Software gratuito e de código aberto para gestão financeira pessoal. Organize suas compras, categorias e relatórios de forma simples e eficiente.">
        <meta name="keywords" content="gestão financeira, software livre, código aberto, controle de gastos, relatórios financeiros">

        <title>Meu Futuro - Gestão Financeira Gratuita e de Código Aberto</title>

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23059669'%3E%3Cpath d='M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1H5C3.89 1 3 1.89 3 3V19A2 2 0 0 0 5 21H19A2 2 0 0 0 21 19V9M19 9H14V4H5V19H19V9Z'/%3E%3C/svg%3E">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Styles -->
        <style>
            /* Gradientes personalizados */
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
                animation-delay: 3s;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .animate-fade-in {
                animation: fadeIn 1s ease-out;
            }

            .animate-fade-in-delayed {
                animation: fadeIn 1s ease-out;
                animation-delay: 0.5s;
                animation-fill-mode: both;
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
                animation: shine 4s infinite;
            }

            @keyframes shine {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            /* Pattern de fundo */
            .bg-pattern {
                background-image:
                    radial-gradient(circle at 25px 25px, rgba(5, 150, 105, 0.1) 2px, transparent 2px),
                    radial-gradient(circle at 75px 75px, rgba(37, 99, 235, 0.1) 2px, transparent 2px);
                background-size: 100px 100px;
            }

            /* Scroll suave */
            html {
                scroll-behavior: smooth;
            }

            /* Hover effects */
            .hover-scale {
                transition: transform 0.3s ease;
            }

            .hover-scale:hover {
                transform: scale(1.05);
            }

            /* Glassmorphism */
            .glass {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-futuro-radial bg-pattern min-h-screen">
        <!-- Navigation -->
        <nav class="fixed top-0 w-full z-50 glass">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-futuro-gradient rounded-xl flex items-center justify-center mr-3 shine-effect">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">
                            Meu Futuro
                        </span>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#features" class="text-gray-700 hover:text-emerald-600 transition duration-200">Recursos</a>
                        <a href="#open-source" class="text-gray-700 hover:text-emerald-600 transition duration-200">Código Aberto</a>
                        <a href="#support" class="text-gray-700 hover:text-emerald-600 transition duration-200">Apoie o Projeto</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-futuro-gradient text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-200">
                                    Inicio
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-emerald-600 transition duration-200">Entrar</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-futuro-gradient text-white px-4 py-2 rounded-lg hover:opacity-90 transition duration-200">
                                        Começar Grátis
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-700 hover:text-emerald-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden glass border-t">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#features" class="block px-3 py-2 text-gray-700 hover:text-emerald-600">Recursos</a>
                    <a href="#open-source" class="block px-3 py-2 text-gray-700 hover:text-emerald-600">Código Aberto</a>
                    <a href="#support" class="block px-3 py-2 text-gray-700 hover:text-emerald-600">Apoie o Projeto</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="block px-3 py-2 text-emerald-600 font-medium">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="block px-3 py-2 text-gray-700 hover:text-emerald-600">Entrar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block px-3 py-2 text-emerald-600 font-medium">Começar Grátis</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-20 h-20 bg-emerald-200/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-blue-200/30 rounded-full animate-float-delayed"></div>
            <div class="absolute bottom-40 left-20 w-24 h-24 bg-emerald-100/40 rounded-full animate-float"></div>
            <div class="absolute bottom-20 right-10 w-18 h-18 bg-blue-100/40 rounded-full animate-float-delayed"></div>

            <!-- Gradient Orbs -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-r from-emerald-300/20 to-blue-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-r from-blue-300/20 to-emerald-300/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Main Content -->
        <main class="relative z-10">
            <!-- Hero Section -->
            <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto text-center">
                    <div class="animate-fade-in">
                        <!-- Hero Badge -->
                        <div class="inline-flex items-center px-4 py-2 bg-emerald-100 text-emerald-800 rounded-full text-sm font-medium mb-8">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.168 18.477 18.582 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            100% Gratuito e de Código Aberto
                        </div>

                        <!-- Hero Title -->
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6">
                            Seu <span class="bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">Futuro</span> Financeiro
                            <br>
                            Começa Aqui
                        </h1>

                        <!-- Hero Subtitle -->
                        <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                            Gerencie suas finanças pessoais com um software completamente gratuito,
                            de código aberto e desenvolvido com amor pela comunidade.
                        </p>

                        <!-- Hero CTA -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="inline-flex items-center px-8 py-4 bg-futuro-gradient text-white font-semibold rounded-xl hover:opacity-90 transition duration-200 shadow-lg hover-scale">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                    Começar Gratuitamente
                                </a>
                            @endif
                            <a href="#features"
                               class="inline-flex items-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-emerald-500 hover:text-emerald-600 transition duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Conhecer Recursos
                            </a>
                        </div>

                        <!-- Hero Stats -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-2xl mx-auto">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600 mb-2">100%</div>
                                <div class="text-gray-600">Gratuito</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600 mb-2">Open</div>
                                <div class="text-gray-600">Source</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-600 mb-2">∞</div>
                                <div class="text-gray-600">Sempre Será</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="py-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16 animate-fade-in-delayed">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">
                            Recursos Poderosos, <span class="text-emerald-600">Totalmente Gratuitos</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Todas as funcionalidades que você precisa para organizar suas finanças,
                            sem custos ocultos, sem limitações, para sempre.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Controle Total de Compras</h3>
                            <p class="text-gray-600">
                                Registre, organize e acompanhe todas as suas compras com detalhes completos.
                                Nunca mais perca o controle dos seus gastos.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Relatórios Inteligentes</h3>
                            <p class="text-gray-600">
                                Gere relatórios detalhados em PDF com análises completas dos seus gastos.
                                Visualize padrões e tome decisões informadas.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Categorização Inteligente</h3>
                            <p class="text-gray-600">
                                Organize suas compras por categorias personalizadas.
                                Entenda exatamente onde seu dinheiro está sendo gasto.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Análise Financeira</h3>
                            <p class="text-gray-600">
                                Acompanhe sua evolução financeira com gráficos e métricas personalizadas.
                                Veja seu progresso ao longo do tempo.
                            </p>
                        </div>

                        <!-- Feature 5 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Segurança Total</h3>
                            <p class="text-gray-600">
                                Seus dados financeiros ficam seguros com criptografia moderna.
                                Privacidade e segurança são nossas prioridades.
                            </p>
                        </div>

                        <!-- Feature 6 -->
                        <div class="glass rounded-2xl p-8 hover-scale">
                            <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Feito com Amor</h3>
                            <p class="text-gray-600">
                                Desenvolvido pela comunidade, para a comunidade.
                                Cada linha de código é escrita pensando em você.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Open Source Section -->
            <section id="open-source" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="animate-fade-in">
                            <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                                Código Aberto
                            </div>

                            <h2 class="text-4xl font-bold text-gray-900 mb-6">
                                Transparência e <span class="text-blue-600">Liberdade</span> Total
                            </h2>

                            <p class="text-xl text-gray-600 mb-8">
                                O Meu Futuro é 100% de código aberto. Isso significa que você pode ver,
                                modificar e contribuir com o código. Sem segredos, sem pegadinhas.
                            </p>

                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Código fonte completamente aberto</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Licença MIT - use como quiser</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Contribuições da comunidade bem-vindas</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">Sem dependência de empresas</span>
                                </div>
                            </div>

                            <a href="#"
                               class="inline-flex items-center px-6 py-3 bg-gray-900 text-white font-semibold rounded-xl hover:bg-gray-800 transition duration-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                Ver no GitHub
                            </a>
                        </div>

                        <div class="animate-fade-in-delayed">
                            <div class="glass rounded-2xl p-8">
                                <div class="bg-gray-900 rounded-xl p-6 text-green-400 font-mono text-sm overflow-x-auto">
                                    <div class="mb-2">$ git clone https://github.com/futuro-app/futuro.git</div>
                                    <div class="mb-2">$ cd futuro</div>
                                    <div class="mb-2">$ composer install</div>
                                    <div class="mb-2">$ npm install && npm run build</div>
                                    <div class="mb-2">$ php artisan migrate</div>
                                    <div class="text-yellow-400">$ php artisan serve</div>
                                    <div class="mt-4 text-gray-400"># Pronto! Seu Futuro está rodando 🚀</div>
                                </div>

                                <div class="mt-6 text-center">
                                    <p class="text-gray-600 mb-4">
                                        <strong>É assim que você instala o Meu Futuro!</strong><br>
                                        Simples, rápido e totalmente gratuito.
                                    </p>
                                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.168 18.477 18.582 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                            MIT License
                                        </span>
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                            Feito com ❤️
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Support Section -->
            <section id="support" class="py-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="animate-fade-in">
                        <div class="inline-flex items-center px-4 py-2 bg-pink-100 text-pink-800 rounded-full text-sm font-medium mb-6">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            Apoie o Projeto
                        </div>

                        <h2 class="text-4xl font-bold text-gray-900 mb-6">
                            Ajude a Manter o <span class="text-pink-600">Meu Futuro</span> Vivo
                        </h2>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            O Meu Futuro é e sempre será gratuito. Mas manter um projeto de código aberto
                            requer tempo, dedicação e recursos. Sua contribuição nos ajuda a continuar
                            desenvolvendo e melhorando o software para toda a comunidade.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                            <div class="glass rounded-xl p-6">
                                <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Desenvolvimento</h3>
                                <p class="text-sm text-gray-600">Novos recursos e melhorias contínuas</p>
                            </div>

                            <div class="glass rounded-xl p-6">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Infraestrutura</h3>
                                <p class="text-sm text-gray-600">Servidores e ferramentas de desenvolvimento</p>
                            </div>

                            <div class="glass rounded-xl p-6">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Comunidade</h3>
                                <p class="text-sm text-gray-600">Suporte e documentação para usuários</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <p class="text-lg font-medium text-gray-900">Escolha como contribuir:</p>

                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="#"
                                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-semibold rounded-xl hover:from-pink-600 hover:to-rose-600 transition duration-200 shadow-lg hover-scale">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    Fazer uma Doação
                                </a>

                                <a href="#"
                                   class="inline-flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-emerald-500 hover:text-emerald-600 transition duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                    Contribuir com Código
                                </a>
                            </div>

                            <p class="text-sm text-gray-500 mt-6">
                                <strong>Transparência total:</strong> Todas as doações são usadas exclusivamente
                                para o desenvolvimento e manutenção do projeto. Relatórios financeiros são
                                publicados mensalmente na nossa comunidade.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-20 px-4 sm:px-6 lg:px-8 bg-futuro-gradient">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="animate-fade-in">
                        <h2 class="text-4xl font-bold text-white mb-6">
                            Pronto para Transformar seu Futuro Financeiro?
                        </h2>

                        <p class="text-xl text-emerald-100 mb-8">
                            Junte-se a milhares de pessoas que já estão organizando suas finanças
                            com o Meu Futuro. É gratuito, é seguro, é para sempre.
                        </p>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center px-8 py-4 bg-white text-emerald-600 font-semibold rounded-xl hover:bg-gray-50 transition duration-200 shadow-lg hover-scale">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                Começar Agora - É Grátis!
                            </a>
                        @endif

                        <p class="text-emerald-100 text-sm mt-4">
                            Sem cartão de crédito • Sem período de teste • Sem pegadinhas
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Logo and Description -->
                    <div class="md:col-span-2">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-futuro-gradient rounded-xl flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold">Meu Futuro</span>
                        </div>
                        <p class="text-gray-400 mb-4 max-w-md">
                            Software gratuito e de código aberto para gestão financeira pessoal.
                            Desenvolvido pela comunidade, para a comunidade.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Produto</h3>
                        <ul class="space-y-2">
                            <li><a href="#features" class="text-gray-400 hover:text-white transition duration-200">Recursos</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">Documentação</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">Roadmap</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">Changelog</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Comunidade</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">GitHub</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">Discord</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-200">Fórum</a></li>
                            <li><a href="#support" class="text-gray-400 hover:text-white transition duration-200">Apoiar</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        © {{ date('Y') }} Meu Futuro. Licenciado sob MIT License. Feito com ❤️ pela comunidade.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-200">Privacidade</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-200">Termos</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-200">Licença</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script>
            // Mobile menu toggle
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
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

            // Parallax effect for floating elements
            document.addEventListener('mousemove', function(e) {
                const floatingElements = document.querySelectorAll('.animate-float, .animate-float-delayed');
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                floatingElements.forEach((element, index) => {
                    const speed = (index + 1) * 0.3;
                    const x = (mouseX - 0.5) * speed;
                    const y = (mouseY - 0.5) * speed;

                    element.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.animate-fade-in, .animate-fade-in-delayed').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 1s ease, transform 1s ease';
                observer.observe(el);
            });
        </script>
    </body>
</html>

