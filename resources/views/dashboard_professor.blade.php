<x-app-layout>
    <x-slot name="header">
        Painel do Professor
    </x-slot>

    <div class="space-y-6 max-w-5xl mx-auto">
        {{-- ── Cabeçalho do perfil ── --}}
        <div class="bg-surface-card border border-surface-border rounded-2xl p-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-600 to-brand-700 flex items-center justify-center shadow-glow text-white font-display font-bold text-xl shrink-0">
                    AL
                </div>

                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 flex-wrap">
                        <h2 class="font-display font-bold text-white text-xl">Dra. Ana Paula Lima</h2>
                        <span class="badge bg-violet-500/15 text-violet-400 border border-violet-500/20">Professor</span>
                    </div>
                    <div class="flex flex-wrap gap-x-4 gap-y-1 mt-2 text-sm text-slate-400">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> ana.lima@ufpi.edu.br</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg> SIAPE 1234567</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg> Doutora em Ciência da Computação</span>
                    </div>
                    <p class="text-xs text-slate-600 mt-1">Departamento de Computação</p>
                </div>

                <button class="shrink-0 btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.17 3.06a2.65 2.65 0 0 0-3.75 0L4 16.5V20.3h3.75l13.43-13.42a2.65 2.65 0 0 0 0-3.75z"/><path d="m16 5.3 2.75 2.75"/></svg>
                    Novo Edital
                </button>
            </div>
        </div>

        {{-- ── Cards de resumo ── --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                <p class="mt-3 font-display font-bold text-2xl text-white">2</p>
                <p class="text-xs text-slate-500 mt-0.5">Editais Abertos</p>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-400"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <p class="mt-3 font-display font-bold text-2xl text-white">1</p>
                <p class="text-xs text-slate-500 mt-0.5">Concluídos</p>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-violet-400"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <p class="mt-3 font-display font-bold text-2xl text-white">16</p>
                <p class="text-xs text-slate-500 mt-0.5">Alunos Inscritos</p>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-400"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M13 6h3a2 2 0 0 1 2 2v7"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                <p class="mt-3 font-display font-bold text-2xl text-white">5</p>
                <p class="text-xs text-slate-500 mt-0.5">Contrapropostas</p>
            </div>
        </div>

        {{-- ── Alerta contrapropostas pendentes ── --}}
        <div class="flex items-center gap-3 bg-amber-500/10 border border-amber-500/25 rounded-xl px-5 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-400 shrink-0"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <p class="text-sm text-amber-300">
                Você tem <strong>2</strong> contraproposta(s) aguardando sua avaliação.
            </p>
            <button class="ml-auto btn-ghost text-xs py-1 px-2.5 border-amber-500/20 text-amber-400">
                Ver
            </button>
        </div>

        {{-- ── Central de Editais ── --}}
        <div class="bg-surface-card border border-surface-border rounded-2xl overflow-hidden">
            <div class="flex items-center justify-between px-5 py-4 border-b border-surface-border">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/></svg>
                    <h3 class="font-display font-semibold text-white text-sm">Central de Gerenciamento de Editais</h3>
                </div>
                <span class="text-xs text-slate-500 font-mono">4 edital(is)</span>
            </div>

            <div class="p-4 space-y-3">
                {{-- Linha Estatica para Demonstracao --}}
                <div class="border border-surface-border rounded-xl overflow-hidden" x-data="{ open: true }">
                    <div class="flex items-center gap-3 px-5 py-4 bg-surface-hover/30 hover:bg-surface-hover/60 cursor-pointer transition-colors" @click="open = !open">
                        <span class="badge border bg-brand-500/15 text-brand-400 border-brand-500/25">Monitoria</span>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-white text-sm truncate">Monitoria de Cálculo I</p>
                            <p class="text-xs text-slate-500 mt-0.5 font-mono">
                                40h &nbsp;·&nbsp; 5 inscrito(s) &nbsp;·&nbsp; até 01/12/2025
                            </p>
                        </div>
                        <span class="badge badge-active gap-1 shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Aberta</span>
                    </div>

                    <div x-show="open" class="px-5 py-4 border-t border-surface-border space-y-3">
                        <div class="flex items-start gap-3 bg-amber-500/10 border border-amber-500/20 rounded-xl px-4 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-400 shrink-0 mt-0.5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                            <div class="flex-1 text-xs text-amber-300">
                                <p class="font-semibold mb-1">Ação irreversível</p>
                                <p class="text-amber-400/80">Ao marcar como <strong>Concluída</strong>, as horas serão automaticamente atribuídas a todos os alunos participantes. Essa ação não pode ser desfeita.</p>
                            </div>
                            <button class="shrink-0 inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold transition-colors">
                                Finalizar
                            </button>
                        </div>
                        
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500 mb-2">Contrapropostas (2)</p>
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 bg-surface-DEFAULT border border-surface-border rounded-lg px-4 py-2.5">
                                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-slate-600 to-slate-700 flex items-center justify-center text-xs font-bold text-white shrink-0">LM</div>
                                    <p class="flex-1 text-sm text-slate-200">Lucas Mendes</p>
                                    <span class="font-mono text-xs text-slate-500">40h</span>
                                    <span class="badge badge-pending gap-1">Pendente</span>
                                    <div class="flex gap-1.5">
                                        <button class="btn-primary text-xs py-1 px-2.5">Aprovar</button>
                                        <button class="btn-ghost text-xs py-1 px-2.5 border-red-500/20 text-red-400 hover:text-red-300 hover:bg-red-500/10">Recusar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
