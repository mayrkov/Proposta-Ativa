@props(['title' => 'Dashboard'])

<header class="flex items-center justify-between px-6 py-4 border-b border-surface-border bg-surface-card/50 backdrop-blur shrink-0">
  {{-- Title --}}
  <div>
    <h1 class="font-display font-bold text-white text-lg leading-tight">{{ $title }}</h1>
    <p class="text-xs text-slate-500 mt-0.5">
      {{ \Carbon\Carbon::now()->isoFormat('dddd, D [de] MMMM [de] YYYY') }}
    </p>
  </div>

  {{-- Actions --}}
  <div class="flex items-center gap-3">
    {{-- Search bar --}}
    <div class="relative hidden sm:block">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <input
        type="text"
        placeholder="Buscar..."
        class="bg-surface-DEFAULT border border-surface-border rounded-lg pl-8 pr-4 py-2 text-sm text-slate-300 placeholder:text-slate-600 focus:outline-none focus:border-brand-600/60 focus:shadow-glow-sm transition-all duration-200 w-48"
      />
    </div>

    {{-- Notifications --}}
    <button class="relative p-2 rounded-lg text-slate-400 hover:text-white hover:bg-surface-hover border border-surface-border transition-all duration-200">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
      <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full bg-brand-500 shadow-glow-sm"></span>
    </button>

    {{-- Avatar --}}
    <div class="flex items-center gap-2.5 pl-3 border-l border-surface-border">
      <div class="w-8 h-8 rounded-full bg-gradient-to-br from-brand-500 to-brand-700 flex items-center justify-center shadow-glow-sm">
        <span class="text-xs font-bold text-white font-display">
            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
        </span>
      </div>
      <div class="hidden md:block">
        <p class="text-sm font-medium text-white leading-tight">{{ Auth::user()->name ?? 'Usuário' }}</p>
        <p class="text-xs text-slate-500">Administrador</p>
      </div>
    </div>
  </div>
</header>
