<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fontes Padrão -->
        @fonts

        <!-- Carregamento do Tailwind v4 via Navegador -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] antialiased min-h-screen flex flex-col justify-between">

        <!-- NAV / HEADER -->
        <header class="w-full max-w-6xl mx-auto px-6 py-4 flex items-center justify-between border-b border-[#e3e3e0]">
            <div class="font-semibold text-lg tracking-wider uppercase">
                {{ config('app.name', 'Laravel') }}
            </div>
            
            <!-- Links e Botões de Autenticação -->
            <nav class="flex items-center gap-6 text-sm font-medium text-gray-600">
                <a href="#" class="hover:text-black transition">Início</a>
                <a href="#" class="hover:text-black transition">Projetos</a>
                <a href="#" class="hover:text-black transition">Contato</a>

                <!-- SE O USUÁRIO ESTIVER LOGADO -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-700 hover:text-black transition">
                        Dashboard
                    </a>
                    
                    <!-- Formulário de Logout (Obrigatório no Laravel para segurança) -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1.5 text-xs font-semibold text-red-600 border border-red-200 rounded-md hover:bg-red-50 transition">
                            Sair
                        </button>
                    </form>
                @endauth

                <!-- SE O USUÁRIO NÃO ESTIVER LOGADO -->
                @guest
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-black rounded-md hover:bg-gray-800 transition shadow-sm">
                        Login
                    </a>
                @endguest
            </nav>
        </header>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="flex-1 flex flex-col items-center justify-center p-6">
            <div class="max-w-xl text-center">
                <h1 class="text-4xl font-bold tracking-tight mb-4">
                    Bem-vindo ao seu projeto
                </h1>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Esta página foi limpa e configurada. Os botões de navegação e autenticação agora se adaptam se você estiver conectado ou não.
                </p>
                
                @guest
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-black rounded-md hover:bg-gray-800 transition shadow-sm">
                        Começar Agora
                    </a>
                @endguest
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700 transition shadow-sm">
                        Ir para o Painel
                    </a>
                @endauth
            </div>
        </main>

        <!-- RODAPÉ / FOOTER -->
        <footer class="w-full border-t border-[#e3e3e0] py-4 bg-gray-50 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos os direitos reservados.
        </footer>

    </body>
</html>