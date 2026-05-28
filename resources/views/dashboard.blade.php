<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(auth()->check() && auth()->user()->tipo === 'professor')
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 text-center max-w-md mx-auto border border-gray-200">
                    <div class="w-12 h-12 rounded-full bg-amber-50 border border-amber-200 flex items-center justify-center mx-auto mb-4 text-amber-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h1 class="text-lg font-bold text-gray-900 mb-2">Acesso Restrito</h1>
                    <p class="text-sm text-gray-500 mb-6">
                        Este painel é de uso exclusivo para Alunos.
                    </p>
                    <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-2 w-full px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-50 border border-gray-300 rounded-md hover:bg-gray-100 transition shadow-sm">
                        Voltar ao Painel Principal
                    </a>
                </div>

            @else

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                        
                        </div>
                </div>

            @endif

        </div>
    </div>
</x-app-layout>