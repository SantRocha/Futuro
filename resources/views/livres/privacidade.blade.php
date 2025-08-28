<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                Política de Privacidade
            </h2>
            <p class="text-emerald-100 mt-2">Como protegemos e utilizamos suas informações pessoais</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Principal -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-100">
                <div class="p-8">
                    <!-- Header do Documento -->
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">Política de Privacidade do Futuro</h1>
                        <p class="text-gray-600">Última atualização: {{ date('d/m/Y') }}</p>
                    </div>

                    <!-- Índice -->
                    <div class="mb-8 p-6 bg-gradient-to-r from-blue-50 to-emerald-50 rounded-lg border border-blue-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Índice</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                            <a href="#introducao" class="text-blue-600 hover:text-blue-800 transition duration-200">1. Introdução</a>
                            <a href="#dados-coletamos" class="text-blue-600 hover:text-blue-800 transition duration-200">2. Dados que Coletamos</a>
                            <a href="#como-usamos" class="text-blue-600 hover:text-blue-800 transition duration-200">3. Como Usamos os Dados</a>
                            <a href="#compartilhamento" class="text-blue-600 hover:text-blue-800 transition duration-200">4. Compartilhamento de Dados</a>
                            <a href="#seguranca" class="text-blue-600 hover:text-blue-800 transition duration-200">5. Segurança dos Dados</a>
                            <a href="#seus-direitos" class="text-blue-600 hover:text-blue-800 transition duration-200">6. Seus Direitos</a>
                            <a href="#retencao" class="text-blue-600 hover:text-blue-800 transition duration-200">7. Retenção de Dados</a>
                            <a href="#cookies" class="text-blue-600 hover:text-blue-800 transition duration-200">8. Cookies</a>
                            <a href="#terceiros" class="text-blue-600 hover:text-blue-800 transition duration-200">9. Links para Terceiros</a>
                            <a href="#alteracoes" class="text-blue-600 hover:text-blue-800 transition duration-200">10. Alterações na Política</a>
                            <a href="#contato" class="text-blue-600 hover:text-blue-800 transition duration-200">11. Contato</a>
                        </div>
                    </div>

                    <!-- Seção 1: Introdução -->
                    <section id="introducao" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">1</span>
                            Introdução
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                No <strong>Futuro</strong>, levamos sua privacidade muito a sério. Esta Política de Privacidade
                                explica como coletamos, usamos, armazenamos e protegemos suas informações pessoais quando você
                                usa nosso aplicativo de controle financeiro.
                            </p>
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-blue-900 mb-2">🔒 Nosso Compromisso:</h4>
                                <p class="text-blue-800 text-sm">
                                    Como projeto de código aberto, acreditamos na transparência total. Esta política detalha
                                    exatamente quais dados coletamos, por que os coletamos e como os protegemos. Sua privacidade
                                    é fundamental para nossa missão.
                                </p>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Esta política está em conformidade com a Lei Geral de Proteção de Dados (LGPD) do Brasil e
                                outras regulamentações aplicáveis de proteção de dados. Ao usar o Futuro, você concorda com
                                as práticas descritas nesta política.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 2: Dados que Coletamos -->
                    <section id="dados-coletamos" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">2</span>
                            Quais Dados Coletamos
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-3">✅ Dados que Coletamos:</h4>
                                    <ul class="text-green-800 text-sm space-y-2">
                                        <li><strong>• Nome:</strong> Para personalização da experiência</li>
                                        <li><strong>• E-mail:</strong> Para autenticação e comunicação</li>
                                        <li><strong>• Dados financeiros:</strong> Compras, categorias e itens que você registra</li>
                                        <li><strong>• Dados de uso:</strong> Como você interage com o aplicativo</li>
                                    </ul>
                                </div>
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-red-900 mb-3">❌ Dados que NÃO Coletamos:</h4>
                                    <ul class="text-red-800 text-sm space-y-2">
                                        <li>• Dados de cartão de crédito ou bancários</li>
                                        <li>• Informações sensíveis (saúde, religião, orientação)</li>
                                        <li>• Localização geográfica</li>
                                        <li>• Contatos do seu dispositivo</li>
                                    </ul>
                                </div>
                            </div>

                            <h4 class="font-semibold text-gray-900 mb-3">Detalhamento dos Dados Coletados:</h4>

                            <div class="space-y-4">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">📝 Dados de Cadastro</h5>
                                    <p class="text-gray-700 text-sm">
                                        Coletamos seu nome e endereço de e-mail quando você cria uma conta. Estes dados são
                                        necessários para autenticação e para personalizar sua experiência no aplicativo.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">💰 Dados Financeiros Pessoais</h5>
                                    <p class="text-gray-700 text-sm">
                                        Armazenamos as informações financeiras que você escolhe inserir: nomes de compras,
                                        valores, categorias, itens e datas. Estes dados permanecem totalmente sob seu controle
                                        e são usados apenas para fornecer as funcionalidades do aplicativo.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">📊 Dados de Uso (Opcionais)</h5>
                                    <p class="text-gray-700 text-sm">
                                        Podemos coletar informações sobre como você usa o aplicativo (páginas visitadas,
                                        funcionalidades utilizadas) para melhorar a experiência do usuário. Estes dados são
                                        sempre anonimizados e agregados.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 3: Como Usamos os Dados -->
                    <section id="como-usamos" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">3</span>
                            Como Usamos Seus Dados
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Utilizamos seus dados pessoais exclusivamente para fornecer e melhorar o serviço do Futuro.
                                Nossos usos são limitados e transparentes:
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-emerald-900 mb-2">🎯 Finalidades Principais:</h4>
                                    <ul class="text-emerald-800 text-sm space-y-1">
                                        <li>• Autenticar e gerenciar sua conta</li>
                                        <li>• Armazenar e organizar seus dados financeiros</li>
                                        <li>• Gerar relatórios e análises pessoais</li>
                                        <li>• Personalizar sua experiência</li>
                                    </ul>
                                </div>

                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">🔧 Finalidades Secundárias:</h4>
                                    <ul class="text-blue-800 text-sm space-y-1">
                                        <li>• Melhorar o aplicativo (dados anonimizados)</li>
                                        <li>• Fornecer suporte técnico</li>
                                        <li>• Comunicar atualizações importantes</li>
                                        <li>• Garantir segurança e prevenir fraudes</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-yellow-900 mb-2">⚠️ Importante:</h4>
                                <p class="text-yellow-800 text-sm">
                                    <strong>Nunca</strong> usamos seus dados para marketing de terceiros, venda de informações
                                    ou qualquer finalidade comercial. Como projeto de código aberto, nosso único objetivo é
                                    fornecer uma ferramenta útil para controle financeiro pessoal.
                                </p>
                            </div>

                            <h4 class="font-semibold text-gray-900 mb-3">Base Legal para Tratamento (LGPD):</h4>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li><strong>Consentimento:</strong> Para dados de cadastro e uso do aplicativo</li>
                                <li><strong>Execução de contrato:</strong> Para fornecer os serviços solicitados</li>
                                <li><strong>Interesse legítimo:</strong> Para melhorias do produto (dados anonimizados)</li>
                                <li><strong>Cumprimento de obrigação legal:</strong> Quando exigido por lei</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Seção 4: Compartilhamento de Dados -->
                    <section id="compartilhamento" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">4</span>
                            Compartilhamento de Dados
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                                <h4 class="font-semibold text-red-900 mb-2">🚫 Política de Não Compartilhamento:</h4>
                                <p class="text-red-800 text-sm font-medium">
                                    O Futuro NÃO vende, aluga, troca ou compartilha seus dados pessoais com terceiros para
                                    fins comerciais ou de marketing. Seus dados financeiros são seus e permanecem privados.
                                </p>
                            </div>

                            <h4 class="font-semibold text-gray-900 mb-3">Exceções Limitadas ao Compartilhamento:</h4>

                            <div class="space-y-4">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">✅ Com Seu Consentimento Explícito</h5>
                                    <p class="text-gray-700 text-sm">
                                        Podemos compartilhar dados se você nos der permissão específica e explícita para fazê-lo,
                                        como ao usar uma funcionalidade de exportação ou integração que você solicitar.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">⚖️ Cumprimento de Obrigações Legais</h5>
                                    <p class="text-gray-700 text-sm">
                                        Podemos divulgar informações quando exigido por lei, ordem judicial, ou para proteger
                                        nossos direitos legais, desde que dentro dos limites legais aplicáveis.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">🔧 Provedores de Serviço Essenciais</h5>
                                    <p class="text-gray-700 text-sm">
                                        Compartilhamos dados mínimos necessários com provedores de infraestrutura (hospedagem,
                                        e-mail) que nos ajudam a operar o aplicativo. Todos têm contratos rígidos de confidencialidade.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-900 mb-2">🔄 Transferência de Projeto</h5>
                                    <p class="text-gray-700 text-sm">
                                        Em caso de transferência do projeto para outra organização, você será notificado com
                                        antecedência e terá a opção de excluir seus dados antes da transferência.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 5: Segurança dos Dados -->
                    <section id="seguranca" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">5</span>
                            Segurança e Armazenamento dos Dados
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Implementamos medidas de segurança técnicas e organizacionais apropriadas para proteger seus
                                dados pessoais contra acesso não autorizado, alteração, divulgação ou destruição.
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-2">🔒 Medidas Técnicas:</h4>
                                    <ul class="text-green-800 text-sm space-y-1">
                                        <li>• Criptografia de dados em trânsito (HTTPS)</li>
                                        <li>• Criptografia de dados em repouso</li>
                                        <li>• Controles de acesso rigorosos</li>
                                        <li>• Firewalls e monitoramento de segurança</li>
                                        <li>• Backups seguros e regulares</li>
                                    </ul>
                                </div>

                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">👥 Medidas Organizacionais:</h4>
                                    <ul class="text-blue-800 text-sm space-y-1">
                                        <li>• Acesso limitado por necessidade</li>
                                        <li>• Treinamento em segurança para colaboradores</li>
                                        <li>• Políticas de segurança documentadas</li>
                                        <li>• Auditorias regulares de segurança</li>
                                        <li>• Planos de resposta a incidentes</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-orange-900 mb-2">🛡️ Sua Responsabilidade:</h4>
                                <p class="text-orange-800 text-sm">
                                    Você também tem um papel importante na segurança: use uma senha forte e única,
                                    mantenha suas credenciais seguras, e notifique-nos imediatamente se suspeitar de
                                    acesso não autorizado à sua conta.
                                </p>
                            </div>

                            <h4 class="font-semibold text-gray-900 mb-3">Localização dos Dados:</h4>
                            <p class="text-gray-700 text-sm mb-4">
                                Seus dados são armazenados em servidores seguros localizados em data centers certificados.
                                Não transferimos dados para países sem proteções adequadas de privacidade sem seu consentimento
                                explícito ou garantias legais apropriadas.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 6: Seus Direitos -->
                    <section id="seus-direitos" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">6</span>
                            Seus Direitos de Privacidade
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                De acordo com a LGPD e outras leis de proteção de dados, você tem direitos importantes sobre
                                seus dados pessoais. Respeitamos e facilitamos o exercício destes direitos:
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">👁️ Direito de Acesso</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode solicitar uma cópia de todos os dados pessoais que temos sobre você,
                                        incluindo como os obtivemos e como os usamos.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">✏️ Direito de Correção</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode corrigir dados pessoais incorretos ou incompletos através das
                                        configurações da conta ou solicitando nossa ajuda.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">🗑️ Direito de Exclusão</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode solicitar a exclusão de seus dados pessoais, exceto quando precisamos
                                        mantê-los por obrigações legais.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">📦 Direito de Portabilidade</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode solicitar seus dados em formato estruturado e legível por máquina
                                        para transferir para outro serviço.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">🚫 Direito de Oposição</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode se opor ao processamento de seus dados para finalidades específicas,
                                        como análises de uso (sempre anonimizadas).
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">⏸️ Direito de Limitação</h4>
                                    <p class="text-gray-700 text-sm">
                                        Você pode solicitar que limitemos o processamento de seus dados em
                                        circunstâncias específicas.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                                <h4 class="font-semibold text-emerald-900 mb-2">📞 Como Exercer Seus Direitos:</h4>
                                <p class="text-emerald-800 text-sm mb-2">
                                    Para exercer qualquer destes direitos, entre em contato conosco através dos canais oficiais.
                                    Responderemos à sua solicitação dentro do prazo legal (até 15 dias úteis).
                                </p>
                                <p class="text-emerald-700 text-xs">
                                    Algumas funcionalidades podem não estar disponíveis se você optar por limitar o uso de
                                    determinados dados necessários para o funcionamento do aplicativo.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 7: Retenção de Dados -->
                    <section id="retencao" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">7</span>
                            Retenção de Dados
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Mantemos seus dados pessoais apenas pelo tempo necessário para cumprir as finalidades para
                                as quais foram coletados, respeitando obrigações legais e seus direitos de privacidade.
                            </p>

                            <div class="space-y-4">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">📅 Dados de Conta Ativa</h4>
                                    <p class="text-gray-700 text-sm">
                                        Enquanto sua conta estiver ativa, mantemos seus dados de cadastro e financeiros para
                                        fornecer o serviço. Você pode excluir dados específicos a qualquer momento.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">🗑️ Após Exclusão da Conta</h4>
                                    <p class="text-gray-700 text-sm">
                                        Quando você exclui sua conta, removemos todos os dados pessoais dentro de 30 dias,
                                        exceto informações que devemos manter por obrigações legais (como logs de segurança).
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">📊 Dados Anonimizados</h4>
                                    <p class="text-gray-700 text-sm">
                                        Dados estatísticos anonimizados (que não podem ser vinculados a você) podem ser
                                        mantidos indefinidamente para melhorias do produto e pesquisa.
                                    </p>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">⚖️ Obrigações Legais</h4>
                                    <p class="text-gray-700 text-sm">
                                        Alguns dados podem ser mantidos por períodos mais longos quando exigido por lei
                                        (como registros de auditoria de segurança por até 2 anos).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 8: Cookies -->
                    <section id="cookies" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">8</span>
                            Cookies e Tecnologias Similares
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro usa cookies e tecnologias similares para melhorar sua experiência e garantir o
                                funcionamento adequado do aplicativo. Somos transparentes sobre como usamos essas tecnologias.
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-2">✅ Cookies Essenciais:</h4>
                                    <ul class="text-green-800 text-sm space-y-1">
                                        <li>• Autenticação e sessão do usuário</li>
                                        <li>• Segurança e prevenção de fraudes</li>
                                        <li>• Funcionalidades básicas do aplicativo</li>
                                        <li>• Preferências de idioma e configuração</li>
                                    </ul>
                                    <p class="text-green-700 text-xs mt-2">
                                        Estes cookies são necessários para o funcionamento do aplicativo e não podem ser desabilitados.
                                    </p>
                                </div>

                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-blue-900 mb-2">📊 Cookies Analíticos (Opcionais):</h4>
                                    <ul class="text-blue-800 text-sm space-y-1">
                                        <li>• Análise de uso do aplicativo (anonimizada)</li>
                                        <li>• Identificação de problemas técnicos</li>
                                        <li>• Melhorias de performance</li>
                                        <li>• Estatísticas agregadas de uso</li>
                                    </ul>
                                    <p class="text-blue-700 text-xs mt-2">
                                        Você pode optar por não permitir estes cookies nas configurações do seu navegador.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                <h4 class="font-semibold text-gray-900 mb-2">🔧 Gerenciamento de Cookies:</h4>
                                <p class="text-gray-700 text-sm mb-2">
                                    Você pode controlar e gerenciar cookies através das configurações do seu navegador.
                                    Note que desabilitar cookies essenciais pode afetar o funcionamento do aplicativo.
                                </p>
                                <p class="text-gray-600 text-xs">
                                    Para instruções específicas sobre como gerenciar cookies, consulte a documentação do seu navegador.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 9: Links para Terceiros -->
                    <section id="terceiros" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">9</span>
                            Links para Terceiros
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro pode conter links para sites ou serviços de terceiros (como documentação,
                                repositórios de código, ou recursos educacionais). Esta política de privacidade não
                                se aplica a esses sites externos.
                            </p>

                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                <h4 class="font-semibold text-yellow-900 mb-2">⚠️ Aviso Importante:</h4>
                                <p class="text-yellow-800 text-sm mb-2">
                                    Não somos responsáveis pelas práticas de privacidade ou conteúdo de sites de terceiros.
                                    Recomendamos que você leia as políticas de privacidade de qualquer site que visitar.
                                </p>
                                <p class="text-yellow-700 text-xs">
                                    Sempre verifique a URL e a legitimidade de sites externos antes de fornecer informações pessoais.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 10: Alterações na Política -->
                    <section id="alteracoes" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">10</span>
                            Alterações nesta Política
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Podemos atualizar esta Política de Privacidade periodicamente para refletir mudanças em
                                nossas práticas, tecnologia, requisitos legais ou outros fatores. Quando fizermos alterações,
                                atualizaremos a data de "Última atualização" no topo desta política.
                            </p>

                            <h4 class="font-semibold text-gray-900 mb-3">Como Comunicamos Alterações:</h4>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                                <li>Notificação proeminente no aplicativo</li>
                                <li>E-mail para todos os usuários registrados</li>
                                <li>Aviso no repositório oficial do projeto</li>
                                <li>Período de aviso prévio para mudanças significativas</li>
                            </ul>

                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <h4 class="font-semibold text-blue-900 mb-2">📢 Mudanças Significativas:</h4>
                                <p class="text-blue-800 text-sm">
                                    Para alterações que afetem materialmente como tratamos seus dados pessoais,
                                    forneceremos aviso com pelo menos 30 dias de antecedência e, quando legalmente
                                    exigido, solicitaremos seu consentimento renovado.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Seção 11: Contato -->
                    <section id="contato" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-sm mr-3">11</span>
                            Contato para Questões de Privacidade
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Se você tiver dúvidas sobre esta Política de Privacidade, quiser exercer seus direitos de
                                privacidade, ou tiver preocupações sobre como tratamos seus dados pessoais, entre em contato conosco.
                            </p>

                            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                                <h4 class="font-semibold text-emerald-900 mb-3">📞 Canais de Contato:</h4>
                                <div class="space-y-2 text-emerald-800 text-sm">
                                    <p><strong>E-mail de Privacidade:</strong> santiagomelo121@gmail.com</p>
                                    <p><strong>Repositório Oficial:</strong> github.com/santrocha/futuro</p>
                                    <p><strong>Tempo de Resposta:</strong> Até 15 dias úteis</p>
                                </div>
                            </div>

                            <p class="text-gray-700 leading-relaxed mt-4">
                                Você também tem o direito de apresentar uma reclamação à Autoridade Nacional de Proteção
                                de Dados (ANPD) se acreditar que o tratamento de seus dados pessoais viola a LGPD.
                            </p>
                        </div>
                    </section>

                    <!-- Footer da Política -->
                    <div class="mt-12 p-6 bg-gradient-to-r from-blue-50 to-emerald-50 rounded-lg border border-blue-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Compromisso com a Transparência</h3>
                        <p class="text-gray-700 mb-4">
                            Como projeto de código aberto, acreditamos que a transparência é fundamental. Esta política
                            reflete nosso compromisso em proteger sua privacidade enquanto fornecemos uma ferramenta
                            útil para controle financeiro pessoal.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('termos') }}" class="inline-flex items-center text-black px-4 py-2 bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Termos de Uso
                            </a>
                            <a href="malito:santiagomelo121@gmail.com" class="inline-flex items-center px-4 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contato
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para navegação suave -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navegação suave para links internos
            const links = document.querySelectorAll('a[href^="#"]');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</x-app-layout>
