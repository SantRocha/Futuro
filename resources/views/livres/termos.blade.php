<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Termos de Uso
            </h2>
            <p class="text-emerald-100 mt-2">Conheça os termos e condições para uso do Futuro</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Principal -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-100">
                <div class="p-8">
                    <!-- Header do Documento -->
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-100 to-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">Termos de Uso do Futuro</h1>
                        <p class="text-gray-600">Última atualização: {{ date('d/m/Y') }}</p>
                    </div>

                    <!-- Índice -->
                    <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg border border-emerald-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Índice</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                            <a href="#aceitacao" class="text-emerald-600 hover:text-emerald-800 transition duration-200">1. Aceitação dos Termos</a>
                            <a href="#natureza" class="text-emerald-600 hover:text-emerald-800 transition duration-200">2. Natureza do Serviço</a>
                            <a href="#cadastro" class="text-emerald-600 hover:text-emerald-800 transition duration-200">3. Cadastro e Conta</a>
                            <a href="#uso" class="text-emerald-600 hover:text-emerald-800 transition duration-200">4. Uso do Aplicativo</a>
                            <a href="#propriedade" class="text-emerald-600 hover:text-emerald-800 transition duration-200">5. Propriedade Intelectual</a>
                            <a href="#doacoes" class="text-emerald-600 hover:text-emerald-800 transition duration-200">6. Doações</a>
                            <a href="#garantias" class="text-emerald-600 hover:text-emerald-800 transition duration-200">7. Isenção de Garantias</a>
                            <a href="#responsabilidade" class="text-emerald-600 hover:text-emerald-800 transition duration-200">8. Limitação de Responsabilidade</a>
                            <a href="#modificacoes" class="text-emerald-600 hover:text-emerald-800 transition duration-200">9. Modificações dos Termos</a>
                            <a href="#rescisao" class="text-emerald-600 hover:text-emerald-800 transition duration-200">10. Rescisão</a>
                            <a href="#lei" class="text-emerald-600 hover:text-emerald-800 transition duration-200">11. Lei Aplicável</a>
                            <a href="#disposicoes" class="text-emerald-600 hover:text-emerald-800 transition duration-200">12. Disposições Gerais</a>
                        </div>
                    </div>

                    <!-- Introdução -->
                    <div class="mb-8">
                        <p class="text-gray-700 leading-relaxed">
                            Bem-vindo ao <strong>Futuro</strong>, um aplicativo de controle financeiro pessoal gratuito e de código aberto.
                            Estes Termos de Uso estabelecem as condições sob as quais você pode acessar e usar nosso aplicativo.
                            Ao criar uma conta ou usar o Futuro, você concorda em cumprir e estar vinculado a estes termos.
                        </p>
                    </div>

                    <!-- Seção 1: Aceitação dos Termos -->
                    <section id="aceitacao" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">1</span>
                            Aceitação dos Termos
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Ao acessar, baixar, instalar ou usar o aplicativo Futuro, você declara que leu, compreendeu e concorda
                                em estar vinculado a estes Termos de Uso. Se você não concordar com qualquer parte destes termos,
                                não deve usar o aplicativo.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Estes termos constituem um acordo legal entre você e o projeto Futuro. Ao continuar usando o aplicativo,
                                você confirma que tem capacidade legal para celebrar este acordo.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 2: Natureza do Serviço -->
                    <section id="natureza" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">2</span>
                            Natureza do Serviço
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro é um aplicativo de controle financeiro pessoal que permite aos usuários registrar, categorizar
                                e acompanhar suas despesas pessoais. O aplicativo é oferecido de forma <strong>totalmente gratuita</strong>
                                e é um projeto de <strong>código aberto</strong> licenciado sob a Licença MIT.
                            </p>
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-blue-900 mb-2">Importante:</h4>
                                <p class="text-blue-800 text-sm">
                                    O Futuro NÃO é um serviço de investimento, consultoria financeira, banco ou instituição financeira.
                                    Não oferecemos conselhos financeiros, de investimento ou tributários. O aplicativo é apenas uma
                                    ferramenta de organização pessoal.
                                </p>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Como projeto de código aberto, o Futuro é desenvolvido e mantido por uma comunidade de colaboradores
                                voluntários com o objetivo de fornecer uma ferramenta útil e acessível para controle financeiro pessoal.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 3: Cadastro e Conta -->
                    <section id="cadastro" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">3</span>
                            Cadastro e Conta do Usuário
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Para usar o Futuro, você deve criar uma conta fornecendo informações precisas e atualizadas.
                                Você é responsável por manter a confidencialidade de sua senha e por todas as atividades que
                                ocorrem em sua conta.
                            </p>
                            <h4 class="font-semibold text-gray-900 mb-2">Requisitos para Cadastro:</h4>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                                <li>Ter pelo menos 18 anos de idade ou a idade legal em sua jurisdição</li>
                                <li>Fornecer informações verdadeiras e precisas</li>
                                <li>Manter suas informações atualizadas</li>
                                <li>Usar o aplicativo apenas para fins pessoais</li>
                            </ul>
                            <p class="text-gray-700 leading-relaxed">
                                Você deve notificar-nos imediatamente sobre qualquer uso não autorizado de sua conta ou qualquer
                                outra violação de segurança. Não seremos responsáveis por perdas decorrentes do uso não autorizado
                                de sua conta.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 4: Uso do Aplicativo -->
                    <section id="uso" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">4</span>
                            Uso do Aplicativo
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-green-900 mb-2">✅ Uso Permitido:</h4>
                                    <ul class="text-green-800 text-sm space-y-1">
                                        <li>• Controle financeiro pessoal</li>
                                        <li>• Registro de despesas próprias</li>
                                        <li>• Geração de relatórios pessoais</li>
                                        <li>• Uso educacional</li>
                                    </ul>
                                </div>
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <h4 class="font-semibold text-red-900 mb-2">❌ Uso Proibido:</h4>
                                    <ul class="text-red-800 text-sm space-y-1">
                                        <li>• Atividades ilegais</li>
                                        <li>• Uso comercial não autorizado</li>
                                        <li>• Tentativas de hacking</li>
                                        <li>• Spam ou abuso do sistema</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Você é totalmente responsável pelo conteúdo que insere no aplicativo, incluindo informações sobre
                                compras, categorias e itens. Deve garantir que todas as informações inseridas são precisas e não
                                violam direitos de terceiros.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 5: Propriedade Intelectual -->
                    <section id="propriedade" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">5</span>
                            Propriedade Intelectual
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro é um software de código aberto licenciado sob a <strong>Licença MIT</strong>.
                                Isso significa que você tem ampla liberdade para usar, modificar e distribuir o software,
                                sujeito aos termos da licença MIT.
                            </p>
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Licença MIT - Resumo:</h4>
                                <p class="text-gray-700 text-sm mb-2">
                                    Você pode usar, copiar, modificar, mesclar, publicar, distribuir, sublicenciar e/ou vender
                                    cópias do software, desde que inclua o aviso de copyright e esta licença em todas as cópias.
                                </p>
                                <p class="text-gray-600 text-xs">
                                    Para o texto completo da licença, consulte o arquivo LICENSE no repositório do projeto.
                                </p>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Embora o código seja aberto, o nome "Futuro", logotipos e marca permanecem protegidos por direitos
                                autorais. O uso da marca deve ser feito de forma respeitosa e não pode sugerir endosso oficial
                                sem permissão.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 6: Doações -->
                    <section id="doacoes" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">6</span>
                            Doações
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro aceita doações voluntárias para apoiar o desenvolvimento e manutenção do projeto.
                                Todas as doações são <strong>completamente voluntárias</strong> e não conferem direitos especiais
                                ou acesso a funcionalidades exclusivas.
                            </p>
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-yellow-900 mb-2">⚠️ Importante sobre Doações:</h4>
                                <ul class="text-yellow-800 text-sm space-y-1">
                                    <li>• Doações são não reembolsáveis</li>
                                    <li>• Não garantem suporte prioritário</li>
                                    <li>• Não conferem direitos de propriedade</li>
                                    <li>• São usadas para manutenção do projeto</li>
                                </ul>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                As doações são utilizadas para cobrir custos de infraestrutura, desenvolvimento de novas
                                funcionalidades e manutenção geral do projeto. Agradecemos profundamente o apoio da comunidade.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 7: Isenção de Garantias -->
                    <section id="garantias" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">7</span>
                            Isenção de Garantias
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                O Futuro é fornecido <strong>"COMO ESTÁ"</strong> e <strong>"CONFORME DISPONÍVEL"</strong>,
                                sem garantias de qualquer tipo, expressas ou implícitas. Não garantimos que o aplicativo:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                                <li>Funcionará de forma ininterrupta ou livre de erros</li>
                                <li>Atenderá às suas necessidades específicas</li>
                                <li>Será compatível com todos os dispositivos ou sistemas</li>
                                <li>Estará sempre disponível ou acessível</li>
                                <li>Será livre de vírus ou outros componentes prejudiciais</li>
                            </ul>
                            <p class="text-gray-700 leading-relaxed">
                                Como projeto de código aberto mantido por voluntários, fazemos nosso melhor esforço para
                                fornecer um aplicativo útil e confiável, mas não podemos garantir perfeição ou disponibilidade
                                constante.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 8: Limitação de Responsabilidade -->
                    <section id="responsabilidade" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">8</span>
                            Limitação de Responsabilidade
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                                <h4 class="font-semibold text-red-900 mb-2">⚠️ Limitação Importante:</h4>
                                <p class="text-red-800 text-sm">
                                    Em nenhuma circunstância o Futuro ou seus colaboradores serão responsáveis por danos diretos,
                                    indiretos, incidentais, especiais, consequenciais ou punitivos resultantes do uso ou
                                    incapacidade de usar o aplicativo.
                                </p>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Isso inclui, mas não se limita a, perdas financeiras, perda de dados, interrupção de negócios,
                                ou qualquer outro dano comercial ou perda, mesmo que tenhamos sido avisados da possibilidade
                                de tais danos.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Você reconhece que o uso do aplicativo é por sua própria conta e risco. É sua responsabilidade
                                fazer backup de seus dados e tomar precauções adequadas para proteger suas informações financeiras.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 9: Modificações dos Termos -->
                    <section id="modificacoes" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">9</span>
                            Modificações dos Termos
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Reservamo-nos o direito de modificar estes Termos de Uso a qualquer momento. Quando fizermos
                                alterações, atualizaremos a data de "Última atualização" no topo deste documento.
                            </p>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Alterações significativas serão comunicadas através de:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                                <li>Notificação no aplicativo</li>
                                <li>E-mail para usuários registrados</li>
                                <li>Aviso no repositório do projeto</li>
                            </ul>
                            <p class="text-gray-700 leading-relaxed">
                                O uso continuado do aplicativo após a publicação das alterações constitui aceitação dos novos termos.
                                Se você não concordar com as alterações, deve parar de usar o aplicativo.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 10: Rescisão -->
                    <section id="rescisao" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">10</span>
                            Rescisão
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Você pode encerrar sua conta a qualquer momento excluindo-a através das configurações do aplicativo.
                                Após a exclusão, seus dados pessoais serão removidos conforme nossa Política de Privacidade.
                            </p>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Podemos suspender ou encerrar sua conta se você violar estes Termos de Uso, usar o aplicativo
                                de forma inadequada, ou por outros motivos legítimos. Em caso de rescisão por nossa parte,
                                tentaremos notificá-lo com antecedência razoável.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                As disposições destes termos que, por sua natureza, devem sobreviver à rescisão, permanecerão
                                em vigor após o término do acordo.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 11: Lei Aplicável -->
                    <section id="lei" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">11</span>
                            Lei Aplicável e Foro
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil, sem consideração
                                aos princípios de conflito de leis. Qualquer disputa relacionada a estes termos será resolvida
                                nos tribunais competentes do Brasil.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Tentaremos resolver qualquer disputa de forma amigável através de diálogo direto antes de
                                recorrer a procedimentos legais formais.
                            </p>
                        </div>
                    </section>

                    <!-- Seção 12: Disposições Gerais -->
                    <section id="disposicoes" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-sm mr-3">12</span>
                            Disposições Gerais
                        </h2>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                <strong>Acordo Integral:</strong> Estes Termos de Uso, juntamente com nossa Política de Privacidade,
                                constituem o acordo integral entre você e o Futuro.
                            </p>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                <strong>Divisibilidade:</strong> Se qualquer disposição destes termos for considerada inválida
                                ou inexequível, as demais disposições permanecerão em pleno vigor e efeito.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Não Renúncia:</strong> A falha em exercer ou fazer cumprir qualquer direito ou disposição
                                destes termos não constituirá renúncia a tal direito ou disposição.
                            </p>
                        </div>
                    </section>

                    <!-- Contato -->
                    <div class="mt-12 p-6 bg-gradient-to-r from-emerald-50 to-blue-50 rounded-lg border border-emerald-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Dúvidas sobre os Termos de Uso?</h3>
                        <p class="text-gray-700 mb-4">
                            Se você tiver dúvidas sobre estes Termos de Uso, entre em contato conosco através dos canais oficiais do projeto.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="malito:santiagomelo121@gmail.com" class="inline-flex items-center px-4 py-2 bg-emerald-600 text-black rounded-lg hover:bg-emerald-700 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Contato
                            </a>
                            <a href="{{ route('privacidade') }}" class="inline-flex items-center px-4 py-2 border border-emerald-600 text-emerald-600 rounded-lg hover:bg-emerald-50 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Política de Privacidade
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
