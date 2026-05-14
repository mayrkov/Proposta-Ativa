<x-app-layout>
    <x-slot name="header">
        Visão Geral
    </x-slot>

    <div class="space-y-6 animate-[fadeIn_.4s_ease_both]">

      {{-- Stats --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
        
        <div class="stat-card group">
            <div class="flex items-start justify-between">
                <div class="p-2 rounded-lg bg-surface-hover text-brand-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                </div>
                <span class="text-xs text-slate-500 font-mono">+3 esta semana</span>
            </div>
            <p class="mt-4 text-3xl font-display font-bold text-white">24</p>
            <p class="text-sm text-slate-400 mt-0.5">Propostas Ativas</p>
        </div>

        <div class="stat-card group">
            <div class="flex items-start justify-between">
                <div class="p-2 rounded-lg bg-surface-hover text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M13 6h3a2 2 0 0 1 2 2v7"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                </div>
                <span class="text-xs text-slate-500 font-mono">+1 hoje</span>
            </div>
            <p class="mt-4 text-3xl font-display font-bold text-white">11</p>
            <p class="text-sm text-slate-400 mt-0.5">Contrapropostas</p>
        </div>

        <div class="stat-card group">
            <div class="flex items-start justify-between">
                <div class="p-2 rounded-lg bg-surface-hover text-amber-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <span class="text-xs text-slate-500 font-mono">5 professores</span>
            </div>
            <p class="mt-4 text-3xl font-display font-bold text-white">58</p>
            <p class="text-sm text-slate-400 mt-0.5">Usuários Cadastrados</p>
        </div>

        <div class="stat-card group">
            <div class="flex items-start justify-between">
                <div class="p-2 rounded-lg bg-surface-hover text-violet-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                </div>
                <span class="text-xs text-slate-500 font-mono">↑ 40% vs mês ant.</span>
            </div>
            <p class="mt-4 text-3xl font-display font-bold text-white">7</p>
            <p class="text-sm text-slate-400 mt-0.5">Concluídas no mês</p>
        </div>

      </div>

      {{-- Recent Proposals --}}
      <div class="bg-surface-card border border-surface-border rounded-2xl overflow-hidden">
        <div class="flex items-center justify-between px-5 py-4 border-b border-surface-border">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-400"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <h2 class="font-display font-semibold text-white text-sm">Propostas Recentes</h2>
          </div>
          <button class="btn-ghost text-xs py-1.5">Ver todas →</button>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-sm">
            <thead>
              <tr class="border-b border-surface-border">
                <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Título</th>
                <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Professor</th>
                <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Carga Horária</th>
                <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500">Status</th>
                <th class="text-left px-5 py-3 text-xs font-semibold uppercase tracking-wide text-slate-500"></th>
              </tr>
            </thead>
            <tbody class="divide-y divide-surface-border">

                <tr class="hover:bg-surface-hover/50 transition-colors duration-150 group">
                    <td class="px-5 py-3.5 font-medium text-slate-200">Monitoria de Cálculo I</td>
                    <td class="px-5 py-3.5 text-slate-400">Dr. Ferreira</td>
                    <td class="px-5 py-3.5 font-mono text-slate-400">20h</td>
                    <td class="px-5 py-3.5"><span class="badge badge-active">Ativa</span></td>
                    <td class="px-5 py-3.5 text-right"><button class="opacity-0 group-hover:opacity-100 btn-ghost text-xs py-1 px-2 transition-opacity">Ver</button></td>
                </tr>

                <tr class="hover:bg-surface-hover/50 transition-colors duration-150 group">
                    <td class="px-5 py-3.5 font-medium text-slate-200">Pesquisa em IA Aplicada</td>
                    <td class="px-5 py-3.5 text-slate-400">Dra. Lima</td>
                    <td class="px-5 py-3.5 font-mono text-slate-400">40h</td>
                    <td class="px-5 py-3.5"><span class="badge badge-pending">Pendente</span></td>
                    <td class="px-5 py-3.5 text-right"><button class="opacity-0 group-hover:opacity-100 btn-ghost text-xs py-1 px-2 transition-opacity">Ver</button></td>
                </tr>

                <tr class="hover:bg-surface-hover/50 transition-colors duration-150 group">
                    <td class="px-5 py-3.5 font-medium text-slate-200">Projeto de Extensão UFPI</td>
                    <td class="px-5 py-3.5 text-slate-400">Dr. Costa</td>
                    <td class="px-5 py-3.5 font-mono text-slate-400">30h</td>
                    <td class="px-5 py-3.5"><span class="badge badge-done">Concluída</span></td>
                    <td class="px-5 py-3.5 text-right"><button class="opacity-0 group-hover:opacity-100 btn-ghost text-xs py-1 px-2 transition-opacity">Ver</button></td>
                </tr>

                <tr class="hover:bg-surface-hover/50 transition-colors duration-150 group">
                    <td class="px-5 py-3.5 font-medium text-slate-200">Iniciação Científica Robótica</td>
                    <td class="px-5 py-3.5 text-slate-400">Dr. Alves</td>
                    <td class="px-5 py-3.5 font-mono text-slate-400">20h</td>
                    <td class="px-5 py-3.5"><span class="badge badge-canceled">Cancelada</span></td>
                    <td class="px-5 py-3.5 text-right"><button class="opacity-0 group-hover:opacity-100 btn-ghost text-xs py-1 px-2 transition-opacity">Ver</button></td>
                </tr>

            </tbody>
          </table>
        </div>
      </div>

      {{-- Quick status row --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="stat-card flex items-center gap-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-400 shrink-0"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <div>
            <p class="text-lg font-display font-bold text-white">7</p>
            <p class="text-xs text-slate-400">Propostas concluídas</p>
          </div>
        </div>
        <div class="stat-card flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-400 shrink-0"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div>
            <p class="text-lg font-display font-bold text-white">5</p>
            <p class="text-xs text-slate-400">Aguardando resposta</p>
          </div>
        </div>
        <div class="stat-card flex items-center gap-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-400 shrink-0"><circle cx="12" cy="12" r="10"/><line x1="15" x2="9" y1="9" y2="15"/><line x1="9" x2="15" y1="9" y2="15"/></svg>
          <div>
            <p class="text-lg font-display font-bold text-white">2</p>
            <p class="text-xs text-slate-400">Canceladas este mês</p>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
