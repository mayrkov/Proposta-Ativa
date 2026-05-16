<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div x-data="{tipoUsuario: ''}">
            <h1 class='mt-3 mb-3 text-center'>Cadastro de usuário</h1>
        <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

        <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        <!-- Tipo de conta -->
            <div class="mt-4">
                <x-input-label for="tipo" :value="__('Tipo')" />

                <x-select_type id="tipo" 
                                x-model="tipoUsuario" 
                                class="block mt-1 w-full"
                                name="tipo" 
                                required/>

                <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
            </div>
        <!-- Identificador -->
            <div class="mt-4" x-show="tipoUsuario === 'Professor' || tipoUsuario === 'Aluno'" >
                <x-input-label for="identificador" :value="__('Identificador')" />

                <x-text-input id="identificador" class="block mt-1 w-full"
                                type="text" 
                                name="identificador" />

                <x-input-error :messages="$errors->get('identificador')" class="mt-2" />
            </div>

        <!-- curso -->
            <div class="mt-4" x-show="tipoUsuario === 'Aluno'">
                <x-input-label for="curso" :value="__('Curso')" />
                <x-select_cursos id="curso"
                                class="block mt-1 w-full"
                                name="curso" />

                <x-input-error :messages="$errors->get('curso')" class="mt-2" />
            </div>

        <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
