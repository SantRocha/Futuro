<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Apoie o Futuro
            </h2>
            <p class="text-emerald-100 mt-2">Sua contribuição faz a diferença! Ajude-nos a manter o Futuro gratuito e em constante evolução.</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Principal de Doação -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-100">
                <div class="p-8">
                    <!-- Título e Mensagem de Incentivo -->
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-100 to-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Faça uma Doação</h3>
                        <p class="text-gray-600 max-w-md mx-auto">
                            O Futuro é construído com paixão e dedicação. Sua ajuda nos permite continuar oferecendo esta ferramenta incrível gratuitamente para todos.
                        </p>
                    </div>

                    <!-- Formulário de Doação -->
                    <form id="donationForm" class="space-y-6">
                        @csrf

                        <!-- Valores Pré-Definidos -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">Escolha um valor:</label>
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                                <!-- R$ 2,00 -->
                                <div class="donation-option">
                                    <input type="radio" id="valor_2" name="valor_doacao" value="2.00" class="sr-only">
                                    <label for="valor_2" class="donation-button">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900">R$ 2</div>
                                            <div class="text-xs text-gray-500">Cafezinho</div>
                                        </div>
                                    </label>
                                </div>

                                <!-- R$ 5,00 -->
                                <div class="donation-option">
                                    <input type="radio" id="valor_5" name="valor_doacao" value="5.00" class="sr-only">
                                    <label for="valor_5" class="donation-button">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900">R$ 5</div>
                                            <div class="text-xs text-gray-500">Lanche</div>
                                        </div>
                                    </label>
                                </div>

                                <!-- R$ 10,00 -->
                                <div class="donation-option">
                                    <input type="radio" id="valor_10" name="valor_doacao" value="10.00" class="sr-only">
                                    <label for="valor_10" class="donation-button">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900">R$ 10</div>
                                            <div class="text-xs text-gray-500">Almoço</div>
                                        </div>
                                    </label>
                                </div>

                                <!-- R$ 20,00 -->
                                <div class="donation-option">
                                    <input type="radio" id="valor_20" name="valor_doacao" value="20.00" class="sr-only">
                                    <label for="valor_20" class="donation-button">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900">R$ 20</div>
                                            <div class="text-xs text-gray-500">Jantar</div>
                                        </div>
                                    </label>
                                </div>

                                <!-- R$ 50,00 -->
                                <div class="donation-option">
                                    <input type="radio" id="valor_50" name="valor_doacao" value="50.00" class="sr-only">
                                    <label for="valor_50" class="donation-button">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-gray-900">R$ 50</div>
                                            <div class="text-xs text-gray-500">Generoso</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Divisor -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">ou</span>
                            </div>
                        </div>

                        <!-- Valor Personalizado -->
                        <div>
                            <div class="donation-option">
                                <input type="radio" id="valor_custom" name="valor_doacao" value="custom" class="sr-only">
                                <label for="valor_custom" class="donation-button">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-gray-900">Outro Valor</div>
                                        <div class="text-xs text-gray-500">Escolha o valor</div>
                                    </div>
                                </label>
                            </div>

                            <!-- Campo de Valor Personalizado (oculto por padrão) -->
                            <div id="customValueField" class="mt-4 hidden">
                                <label for="valor_personalizado" class="block text-sm font-medium text-gray-700 mb-2">
                                    Insira o valor que deseja doar:
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">R$</span>
                                    </div>
                                    <input type="number"
                                           id="valor_personalizado"
                                           name="valor_personalizado"
                                           step="0.01"
                                           min="1"
                                           placeholder="0,00"
                                           class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 text-lg">
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Valor mínimo: R$ 1,00</p>
                            </div>
                        </div>

                        <!-- Botão de Doação -->
                        <div class="pt-6">
                            <button type="submit"
                                    id="donateButton"
                                    class="w-full flex justify-center items-center px-6 py-4 border border-transparent text-lg font-medium rounded-lg text-white bg-gradient-to-r from-emerald-600 to-blue-600 hover:from-emerald-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                <span id="buttonText">Selecione um valor</span>
                            </button>
                        </div>
                    </form>

                    <!-- Mensagem de Agradecimento -->
                    <div class="mt-8 p-4 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg border border-emerald-200">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-emerald-800 font-medium">Obrigado por apoiar o Futuro!</p>
                                <p class="text-xs text-emerald-700 mt-1">Sua generosidade nos ajuda a manter o Futuro gratuito e em constante evolução.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card de Informações Adicionais -->
            <div class="mt-6 bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-100">
                <div class="p-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Como sua doação ajuda:</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h5 class="font-medium text-gray-900 mb-1">Desenvolvimento</h5>
                            <p class="text-sm text-gray-600">Novas funcionalidades e melhorias</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                </svg>
                            </div>
                            <h5 class="font-medium text-gray-900 mb-1">Infraestrutura</h5>
                            <p class="text-sm text-gray-600">Servidores e hospedagem</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h5 class="font-medium text-gray-900 mb-1">Comunidade</h5>
                            <p class="text-sm text-gray-600">Suporte e documentação</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Personalizado -->
    <style>
        .donation-button {
            display: block;
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            background-color: #ffffff;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .donation-button:hover {
            border-color: #10b981;
            background-color: #f0fdf4;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);
        }

        .donation-option input[type="radio"]:checked + .donation-button {
            border-color: #10b981;
            background-color: #ecfdf5;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .donation-option input[type="radio"]:checked + .donation-button .text-gray-900 {
            color: #059669;
        }

        .donation-option input[type="radio"]:checked + .donation-button .text-gray-500 {
            color: #047857;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('donationForm');
            const customValueField = document.getElementById('customValueField');
            const customValueInput = document.getElementById('valor_personalizado');
            const donateButton = document.getElementById('donateButton');
            const buttonText = document.getElementById('buttonText');
            const radioButtons = document.querySelectorAll('input[name="valor_doacao"]');

            // Função para atualizar o botão
            function updateButton() {
                const selectedValue = document.querySelector('input[name="valor_doacao"]:checked');

                if (!selectedValue) {
                    buttonText.textContent = 'Selecione um valor';
                    donateButton.disabled = true;
                    return;
                }

                if (selectedValue.value === 'custom') {
                    const customValue = parseFloat(customValueInput.value);
                    if (customValue && customValue >= 1) {
                        buttonText.textContent = `Doar R$ ${customValue.toFixed(2).replace('.', ',')}`;
                        donateButton.disabled = false;
                    } else {
                        buttonText.textContent = 'Insira um valor válido';
                        donateButton.disabled = true;
                    }
                } else {
                    const value = parseFloat(selectedValue.value);
                    buttonText.textContent = `Doar R$ ${value.toFixed(2).replace('.', ',')}`;
                    donateButton.disabled = false;
                }
            }

            // Event listeners para os radio buttons
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'custom') {
                        customValueField.classList.remove('hidden');
                        customValueInput.focus();
                    } else {
                        customValueField.classList.add('hidden');
                        customValueInput.value = '';
                    }
                    updateButton();
                });
            });

            // Event listener para o campo de valor personalizado
            customValueInput.addEventListener('input', updateButton);

            // Event listener para o formulário
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const selectedValue = document.querySelector('input[name="valor_doacao"]:checked');
                if (!selectedValue) {
                    alert('Por favor, selecione um valor para doar.');
                    return;
                }

                let valorFinal;
                if (selectedValue.value === 'custom') {
                    valorFinal = parseFloat(customValueInput.value);
                    if (!valorFinal || valorFinal < 1) {
                        alert('Por favor, insira um valor válido (mínimo R$ 1,00).');
                        return;
                    }
                } else {
                    valorFinal = parseFloat(selectedValue.value);
                }

                // Aqui você pode integrar com a API de pagamento
                // Por exemplo: window.location.href = `https://api-pagamento.com/donate?amount=${valorFinal}`;

                // Por enquanto, apenas um alerta para demonstração
                alert(`Redirecionando para pagamento de R$ ${valorFinal.toFixed(2).replace('.', ',')}...\n\nAqui você integrará com sua API de pagamento.`);

                // Exemplo de como você pode enviar os dados:
                // fetch('/api/create-payment', {
                //     method: 'POST',
                //     headers: {
                //         'Content-Type': 'application/json',
                //         'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                //     },
                //     body: JSON.stringify({
                //         amount: valorFinal
                //     })
                // }).then(response => response.json())
                //   .then(data => {
                //       if (data.payment_url) {
                //           window.location.href = data.payment_url;
                //       }
                //   });
            });

            // Inicializar o estado do botão
            updateButton();
        });
    </script>
</x-app-layout>
