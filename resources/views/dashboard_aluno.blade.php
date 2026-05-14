<x-app-layout>
    <x-slot name="header">
        Painel do Aluno
    </x-slot>

    <div class="space-y-6 max-w-5xl mx-auto">
        {{-- ── Cabeçalho do perfil ── --}}
        <div class="bg-surface-card border border-surface-border rounded-2xl p-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-500 to-brand-700 flex items-center justify-center shadow-glow text-white font-display font-bold text-xl shrink-0">
                    LM
                </div>

                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 flex-wrap">
                        <h2 class="font-display font-bold text-white text-xl">Lucas Mendes Carvalho</h2>
                        <span class="badge bg-brand-500/15 text-brand-400 border border-brand-500/20">Aluno</span>
                    </div>
                    <div class="flex flex-wrap gap-x-4 gap-y-1 mt-2 text-sm text-slate-400">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> lucas.carvalho@ufpi.edu.br</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg> 2021001823</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg> Ciência da Computação — 6º Semestre</span>
                    </div>
                </div>

                {{-- mini badge de meta --}}
                <div class="shrink-0 text-center bg-surface-DEFAULT border border-surface-border rounded-xl px-5 py-3">
                    <p class="font-display font-bold text-2xl text-white">68%</p>
                    <p class="text-xs text-slate-500 mt-0.5">da meta atingida</p>
                </div>
            </div>
        </div>

        {{-- ── Medidor de progresso acadêmico ── --}}
        <div class="bg-surface-card border border-surface-border rounded-2xl p-6 space-y-5">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                <h3 class="font-display font-semibold text-white text-sm">Progresso de Horas Complementares</h3>
            </div>

            <div class="w-full">
                <div class="flex justify-between text-xs text-slate-400 mb-2 font-mono">
                    <span>137h concluídas</span>
                    <span class="font-semibold text-white">68%</span>
                </div>
                <div class="w-full h-3 bg-surface-DEFAULT rounded-full overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-brand-600 to-brand-400 transition-all duration-700" style="width: 68%;"></div>
                </div>
                <div class="flex justify-between text-xs text-slate-500 mt-1.5">
                    <span>Meta: 200h</span>
                    <span>63h restantes</span>
                </div>
            </div>

            {{-- cards resumo --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-1">
                <div class="rounded-xl border p-3 text-center bg-emerald-500/10 border-emerald-500/20">
                    <p class="font-display font-bold text-lg text-emerald-400">137h</p>
                    <p class="text-xs text-slate-500 mt-0.5">Concluídas</p>
                </div>
                <div class="rounded-xl border p-3 text-center bg-amber-500/10 border-amber-500/20">
                    <p class="font-display font-bold text-lg text-amber-400">63h</p>
                    <p class="text-xs text-slate-500 mt-0.5">Restantes</p>
                </div>
                <div class="rounded-xl border p-3 text-center bg-brand-500/10 border-brand-500/20">
                    <p class="font-display font-bold text-lg text-brand-400">200h</p>
                    <p class="text-xs text-slate-500 mt-0.5">Meta total</p>
                </div>
                <div class="rounded-xl border p-3 text-center bg-surface-hover border-surface-border">
                    <p class="font-display font-bold text-lg text-slate-300">6</p>
                    <p class="text-xs text-slate-500 mt-0.5">Atividades</p>
                </div>
            </div>
        </div>

        {{-- ── Histórico de atividades ── --}}
        <div class="bg-surface-card border border-surface-border rounded-2xl overflow-hidden">
            <div class="flex items-center gap-2 px-5 py-4 border-b border-surface-border">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                <h3 class="font-display font-semibold text-white text-sm">Histórico de Atividades</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-surface-border">
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Atividade</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Professor</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Carga</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-border">
                        <tr class="hover:bg-surface-hover/50 transition-colors">
                            <td class="px-5 py-3.5 font-medium text-slate-200">Monitoria de Cálculo I</td>
                            <td class="px-5 py-3.5 text-slate-400">Dr. Ferreira</td>
                            <td class="px-5 py-3.5 font-mono text-slate-400">40h</td>
                            <td class="px-5 py-3.5">
                                <span class="badge badge-done gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-400"><polyline points="20 6 9 17 4 12"/></svg> Concluída</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-hover/50 transition-colors">
                            <td class="px-5 py-3.5 font-medium text-slate-200">Pesquisa em Redes Neurais</td>
                            <td class="px-5 py-3.5 text-slate-400">Dra. Souza</td>
                            <td class="px-5 py-3.5 font-mono text-slate-400">40h</td>
                            <td class="px-5 py-3.5">
                                <span class="badge badge-active gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><path d="M5 22h14"/><path d="M5 2h14"/><path d="M17 2v20"/><path d="M7 2v20"/><path d="M14 8H10"/><path d="M14 16H10"/><path d="M12 2v20"/></svg> Em andamento</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
