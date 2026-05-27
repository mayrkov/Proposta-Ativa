<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Novo Curso') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"></div> --}}
            <div class="mt-6 px-6 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg sm:max-w-md mx-auto">
                <form method="POST" action="{{ route('curso.store') }}">
                    @csrf
                    <div x-data="{tipoUsuario: ''}">
                        <h1 class='mt-3 mb-3 text-center'>Cadastro de Cursos</h1>
                     <!-- Name -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>
            
                     <!-- horas -->
                        <div class="mt-4">
                            <x-input-label for="horas" :value="__('Horas')" />
                            <x-text-input id="horas" class="block mt-1 w-full" type="number" name="horas" :value="old('horas')" required min="1" />
                            <x-input-error :messages="$errors->get('horas')" class="mt-2" />
                        </div>

                     <!-- Envio formulário -->    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Registrar') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
