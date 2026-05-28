<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Acadêmico - Proposta Ativa</title>
    
    @fonts

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#FDFDFC] text-[#1b1b18] antialiased min-h-screen flex flex-col justify-between p-6">

    <div class="w-full max-w-5xl mx-auto flex-1 flex flex-col justify-center">
        
        @if(auth()->check() && auth()->user()->tipo === 'professor')
            
            <div class="max-w-md mx-auto text-center bg-white border border-[#e3e3e0] rounded-xl p-8 shadow-[0px_1px_2px_0px_rgba(0,0,0,0,0.06)]">
                <div class="w-12 h-12 rounded-full bg-amber-50 border border-amber-200 flex items-center justify-center mx-auto mb-4 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                    </svg>
                </div>

                <h1 class="text-xl font-bold text-gray-900 mb-2">Acesso Restrito</h1>
                <p class="text-sm text-gray-500 mb-6 leading-relaxed">
                    Este painel é de uso exclusivo para **Alunos**. Como seu perfil é de **Professor**, você não possui permissão para visualizar estas informações.
                </p>

                <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 text-sm font-semibold text-gray-700 bg-white border border-[#e3e3e0] rounded-md hover:bg-gray-50 hover:text-black transition shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Voltar ao Painel Principal
                </a>
            </div>

        @else

            <header class="mb-8 pb-6 border-b border-[#e3e3e0] mt-4">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Painel Acadêmico do Aluno</h1>
                <p class="text-sm text-gray-500 mt-1">Gerencie suas horas, envie contrapropostas e acompanhe suas atividades complementares.</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
                
                <div class="bg-white border border-[#e3e3e0] rounded-xl p-6 shadow-[0px_1px_2px_0px_rgba(0,0,0,0,0.06)]">
                    <h2 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Gestão de Horas</h2>
                    <p class="text-sm text-gray-600 mb-4">Total de horas validadas no banco de dados:</p>
                    <div class="text-4xl font-bold tracking-tight text-black bg-gray-50 border border-gray-100 rounded-lg py-3 px-4 inline-block w-full text-center">
                        {{ $total_horas ?? 0 }} <span class="text-lg font-medium text-gray-500">horas</span>
                    </div>
                    <p class="text-xs text-gray-400 mt-3 leading-normal">*Este contador soma automaticamente apenas as contrapropostas com status 'aceito'.</p>
                </div>

                <div class="md:col-span-2 bg-white border border-[#e3e3e0] rounded-xl p-6 shadow-[0px_1px_2px_0px_rgba(0,0,0,0,0.06)]">
                    <h2 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-4">Oportunidades Disponíveis (Vagas)</h2>
                    
                    @if(isset($vagas) && $vagas->count() > 0)
                        <div class="space-y-6 divide-y divide-[#e3e3e0]">
                            @foreach($vagas as $index => $vaga)
                                <div class="{{ $index > 0 ? 'pt-6' : '' }}">
                                    <div class="flex justify-between items-start mb-3">
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $vaga->titulo }}</h3>
                                        <span class="bg-gray-100 text-gray-700 text-xs font-medium px-2.5 py-1 rounded-full border border-gray-200">
                                            Padrão: {{ $vaga->carga_horaria }}h
                                        </span>
                                    </div>
                                    
                                    <form action="{{ route('contraproposta.store', $vaga->id) }}" method="POST" class="space-y-4 bg-gray-50/50 border border-gray-100 rounded-lg p-4">
                                        @csrf
                                        <div>
                                            <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Sua Justificativa (Mínimo 30 caracteres):</label>
                                            <textarea name="justificativa_ajuste" rows="2" class="w-full bg-white border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-black transition" placeholder="Digite uma justificativa detalhada..." required></textarea>
                                        </div>

                                        <div class="flex flex-col sm:flex-row sm:items-end gap-3">
                                            <div class="flex-1">
                                                <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Carga Horária Sugerida:</label>
                                                <input type="number" name="carga_horaria_proposta" class="w-full bg-white border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-black transition" placeholder="Ex: 20" required>
                                            </div>
                                            <button type="submit" class="bg-black text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-gray-800 transition shadow-sm shrink-0">
                                                Enviar Contraproposta
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-amber-50 border border-amber-200 text-amber-800 text-sm rounded-lg p-4">
                            Nenhuma vaga de atividade complementar foi cadastrada na tabela "postagens" ainda.
                        </div>
                    @endif
                </div>

                <div class="md:col-span-3 bg-white border border-[#e3e3e0] rounded-xl p-6 shadow-[0px_1px_2px_0px_rgba(0,0,0,0,0.06)]">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Histórico de Atividades do Aluno</h2>
                        <span class="bg-blue-50 text-blue-700 text-xs font-medium px-2.5 py-0.5 rounded border border-blue-100">Em desenvolvimento</span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-600 border-collapse">
                            <thead>
                                <tr class="border-b border-[#e3e3e0] bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    <th class="py-3 px-4">Atividade / Vaga</th>
                                    <th class="py-3 px-4">Horas Propostas</th>
                                    <th class="py-3 px-4">Data de Envio</th>
                                    <th class="py-3 px-4 text-right">Status Atual</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="py-3.5 px-4 font-medium text-gray-900">Exemplo de Integração Futura</td>
                                    <td class="py-3.5 px-4">--</td>
                                    <td class="py-3.5 px-4">--</td>
                                    <td class="py-3.5 px-4 text-right">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                            Pendente
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        @endif
    </div>

    <footer class="w-full max-w-5xl mx-auto border-t border-[#e3e3e0] mt-12 py-4 text-center text-xs text-gray-400 shrink-0">
        &copy; {{ date('Y') }} Proposta Ativa. Todos os direitos reservados.
    </footer>

</body>
</html>