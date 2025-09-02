<x-app-layout>
    <x-slot name="header">
        <div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Lista de Compras
                    </h2>
                    <p class="text-emerald-100 mt-2">Gerencie todas as suas compras e gastos</p>
                </div>
                <a href="{{ route('compra.create') }}"
                   class="inline-flex items-center px-6 py-3 bg-white text-emerald-600 font-medium rounded-lg hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-white transition duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Nova Compra
                </a>
            </div>
        </div>
    </x-slot>

    <!-- CSS Personalizado para os Selects -->
    <style>
        /* Estilização personalizada para os selects */
        select:focus {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        /* Animação suave para mudanças */
        .transition-all {
            transition: all 0.3s ease-in-out;
        }

        /* Hover effect para o card */
        .mb-6:hover {
            transform: translateY(-1px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <!-- Total Geral e Filtros -->
            <div class="mb-6 bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-100">
                <div class="p-6 bg-gradient-to-r from-emerald-50 to-blue-50 border-l-4 border-emerald-500">
                    <!-- Header do Card -->
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8">
                        <div class="flex items-center mb-4 lg:mb-0">
                            <svg class="w-8 h-8 text-emerald-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Total Geral das Compras</h3>
                                <p class="text-3xl font-bold text-emerald-600">R$ {{ number_format($totalGeral, 2, ',', '.') }}</p>
                            </div>
                        </div>

                        <!-- Filtros -->
                        <div class="flex flex-col sm:flex-row gap-3">
                            <form method="GET" action="{{ route('compra.index') }}" class="flex flex-col sm:flex-row gap-3" id="filtroForm">
                                <!-- Filtro de Período -->
                                <div class="relative">
                                    <label for="periodo" class="sr-only">Filtro de período</label>
                                    <select name="periodo"
                                            id="periodo"
                                            onchange="this.form.submit()"
                                            class="appearance-none bg-white border border-gray-300 rounded-lg py-2 pr-8 text-sm font-medium text-gray-700 hover:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200 min-w-[160px]">
                                        <option value="mes" {{ request('periodo') !== 'todos' ? 'selected' : '' }}>
                                            📅 Por mês
                                        </option>
                                        <option value="todos" {{ request('periodo') === 'todos' ? 'selected' : '' }}>
                                            🗓️ Todo período
                                        </option>
                                    </select>
                                </div>

                                <!-- Filtro de Mês (condicional) -->
                                @if(request('periodo') !== 'todos')
                                    <div class="relative">
                                        <label for="mes" class="sr-only">Selecionar mês</label>
                                        <select name="mes"
                                                id="mes"
                                                onchange="this.form.submit()"
                                                class="appearance-none bg-white border border-gray-300 rounded-lg py-2 pr-8 text-sm font-medium text-gray-700 hover:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200 min-w-[160px]">
                                            @foreach($mesesDisponiveis as $md)
                                                <option value="{{ $md->mes }}" {{ $mes == $md->mes && $ano == $md->ano ? 'selected' : '' }}>
                                                    {{ \Carbon\Carbon::createFromDate($md->ano, $md->mes, 1)->translatedFormat('F Y') }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                <!-- Botão de Reset (opcional) -->
                                @if(request('periodo') || request('mes'))
                                    <a href="{{ route('compra.index') }}"
                                    class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                        Limpar
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>

                    <!-- Informações do Filtro Ativo -->
                    <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>
                            @if(request('periodo') === 'todos')
                                Exibindo <strong>todas as compras</strong> registradas
                            @else
                                Exibindo compras de
                                <strong>
                                    @if(isset($mes) && isset($ano))
                                        {{ \Carbon\Carbon::createFromDate($ano, $mes, 1)->translatedFormat('F \d\e Y') }}
                                    @else
                                        {{ \Carbon\Carbon::now()->translatedFormat('F \d\e Y') }}
                                    @endif
                                </strong>
                            @endif
                        </span>

                        @if(isset($totalCompras))
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 ml-2">
                                {{ $totalCompras }} {{ $totalCompras == 1 ? 'compra' : 'compras' }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Lista de Compras -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    @if($compras->count() > 0)
                        <div class="space-y-4">
                            @foreach($compras as $compra)
                                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition duration-200">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <a href="{{ route('itens.index', ['compraId' => $compra->id_compra]) }}"
                                               class="block hover:bg-gray-50 -m-6 p-6 rounded-lg transition duration-200">
                                                <div class="flex items-start justify-between">
                                                    <div class="flex-1">
                                                        <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $compra->nome_compra }}</h4>

                                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-sm text-gray-600">
                                                            <!-- Compra -->
                                                            <div class="flex items-center">
                                                                <svg class="w-4 h-4 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                                                </svg>
                                                                <span class="font-medium">R$ {{ number_format($compra->total_compra, 2, ',', '.') }}</span>
                                                            </div>

                                                            <!-- Tipo -->
                                                            <div class="flex items-center">
                                                                <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                                </svg>
                                                                <span>{{ $compra->tipoCompra->nome_tipo_compra ?? 'Tipo Desconhecido' }}</span>
                                                            </div>

                                                            <!-- Usuario -->
                                                            <div class="flex items-center">
                                                                <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                                </svg>
                                                                <span>{{ $compra->user->name ?? 'Usuário Desconhecido' }}</span>
                                                            </div>

                                                            <!-- Pagamento -->
                                                            <div class="flex items-center">
                                                                <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                                                </svg>
                                                                <span>
                                                                    @if($compra->pagamento == 'DINHEIRO') 💵 Dinheiro
                                                                    @elseif($compra->pagamento == 'PIX') 📱 PIX
                                                                    @elseif($compra->pagamento == 'CARTAO DEBITO') 💳 Débito
                                                                    @elseif($compra->pagamento == 'CARTAO CREDITO') 💳 Crédito
                                                                    @else 🔄 {{ $compra->pagamento }}
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Seta -->
                                                    <div class="ml-4">
                                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex flex-col items-center space-y-4 mt-4 pt-4 border-t border-gray-100 md:flex-row justify-between md:items-center md:space-y-0"  style="width: 100%;">

                                        <div>
                                            <!-- Criado em -->
                                            <div class="flex items-center space-x-2 text-gray-600">
                                                <span class="text-gray-500 text-sm">Criado</span>
                                                <span class="text-primary flex items-center space-x-1 text-sm text-gray-500">
                                                    <!-- Ícone de calendário -->
                                                    <svg class="w-[18px] h-[18px] mr-1 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                                    </svg>

                                                    <!-- Data formatada -->
                                                    <span>{{ \Carbon\Carbon::parse($compra->created_at)->format('d M Y') }}</span>
                                                </span>
                                                <span class="text-sm text-gray-500">às</span>
                                                <span class="text-primary flex items-center space-x-1 text-sm text-gray-500">
                                                    <!-- Ícone de relógio -->
                                                    <svg class="w-[18px] h-[18px] mr-1 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>

                                                    <!-- Hora formatada -->
                                                    <span>{{ \Carbon\Carbon::parse($compra->created_at)->format('H:i') }}</span>
                                                </span>
                                            </div>

                                            <!-- Editado em -->
                                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                                <span class="text-sm text-gray-500">Editado</span>
                                                <span class="text-primary flex items-center space-x-1">
                                                    <!-- Ícone de calendário -->
                                                    <svg class="w-[18px] h-[18px] mr-1 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                                    </svg>

                                                    <!-- Data formatada -->
                                                    <span>{{ \Carbon\Carbon::parse($compra->updated_at)->format('d M Y') }}</span>
                                                </span>
                                                <span class="text-gray-600">às</span>
                                                <span class="text-primary flex items-center space-x-1">
                                                    <!-- Ícone de relógio -->
                                                    <svg class="w-[18px] h-[18px] mr-1 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>

                                                    <!-- Hora formatada -->
                                                    <span>{{ \Carbon\Carbon::parse($compra->updated_at)->format('H:i') }}</span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Editar Excluir -->
                                        <div class="justify-end">
                                            <a href="{{ route('compra.edit', $compra->id_compra) }}"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                Editar
                                            </a>

                                            <form action="{{ route('compra.destroy', $compra->id_compra) }}" method="POST" class="inline delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                                                        data-compra-name="{{ $compra->nome_compra }}"
                                                        data-compra-total="{{ number_format($compra->total_compra, 2, ',', '.') }}"
                                                        data-compra-tipo="{{ $compra->tipoCompra->nome_tipo_compra ?? 'Tipo Desconhecido' }}"
                                                        data-compra-pagamento="{{ $compra->pagamento }}">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                    Deletar
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <!-- Estado Vazio -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Nenhuma compra encontrada</h3>
                            <p class="text-gray-500 mb-6">Comece adicionando sua primeira compra ao sistema.</p>
                            <a href="{{ route('compra.create') }}"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-blue-600 text-white font-medium rounded-lg hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition duration-200 shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Adicionar Primeira Compra
                            </a>
                        </div>
                    @endif
                </div>
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
                    <h4 class="font-semibold text-gray-900 mb-2" id="compraName">Nome da Compra</h4>
                    <div class="text-sm text-gray-600 space-y-1">
                        <p id="compraDetails">Detalhes da compra</p>
                    </div>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-red-800">Atenção!</p>
                            <p class="text-sm text-red-700">A compra será removida permanentemente do sistema, incluindo todos os itens associados.</p>
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
                    <span id="deleteButtonText">Deletar Compra</span>
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
        function openDeleteModal(form, compraName, compraTotal, compraTipo, compraPagamento) {
            currentDeleteForm = form;

            // Preencher informações da compra no modal
            document.getElementById('compraName').textContent = compraName;

            // Formatar o pagamento
            let pagamentoFormatado = compraPagamento;
            switch(compraPagamento) {
                case 'DINHEIRO':
                    pagamentoFormatado = '💵 Dinheiro';
                    break;
                case 'PIX':
                    pagamentoFormatado = '📱 PIX';
                    break;
                case 'CARTAO DEBITO':
                    pagamentoFormatado = '💳 Débito';
                    break;
                case 'CARTAO CREDITO':
                    pagamentoFormatado = '💳 Crédito';
                    break;
                default:
                    pagamentoFormatado = '🔄 ' + compraPagamento;
            }

            document.getElementById('compraDetails').innerHTML = `
                <strong>Total:</strong> R$ ${compraTotal}<br>
                <strong>Tipo:</strong> ${compraTipo}<br>
                <strong>Pagamento:</strong> ${pagamentoFormatado}
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
            deleteText.textContent = 'Deletar Compra';
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
                    const compraName = this.getAttribute('data-compra-name');
                    const compraTotal = this.getAttribute('data-compra-total');
                    const compraTipo = this.getAttribute('data-compra-tipo');
                    const compraPagamento = this.getAttribute('data-compra-pagamento');

                    openDeleteModal(form, compraName, compraTotal, compraTipo, compraPagamento);
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

        // JavaScript para melhorar a experiência dos filtros
        const periodoSelect = document.getElementById('periodo');
        const mesSelect = document.getElementById('mes');
        const form = document.getElementById('filtroForm');

        // Adicionar loading state nos selects
        function addLoadingState(element) {
            element.style.opacity = '0.6';
            element.style.pointerEvents = 'none';
        }

        function removeLoadingState(element) {
            element.style.opacity = '1';
            element.style.pointerEvents = 'auto';
        }

        // Event listeners para feedback visual
        if (periodoSelect) {
            periodoSelect.addEventListener('change', function() {
                addLoadingState(this);
                // O form já submete automaticamente, mas podemos adicionar feedback
            });
        }

        if (mesSelect) {
            mesSelect.addEventListener('change', function() {
                addLoadingState(this);
            });
        }

        // Adicionar indicador de carregamento
        form.addEventListener('submit', function() {
            const submitElements = form.querySelectorAll('select');
            submitElements.forEach(addLoadingState);
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

