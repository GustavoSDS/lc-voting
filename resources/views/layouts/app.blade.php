<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>

        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                            Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Añadir el formulario para la idea aqui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum harum
            velit exercitationem dolores, amet impedit sint sed eaque corporis, illum ex repudiandae, earum ipsum alias
            non possimus. Minus, in molestias.
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibol border-b-4 pb-3 space-x-10">
                    <li> <a href="#" class="border-b-4 border-blue pb-3">Todas la ideas (87)</a></li>
                    <li> <a href="#" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">Consideraciones(6)</a></li>
                    <li> <a href="#" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">En progreso(1)</a></li>
                </ul>
                <ul class="flex uppercase font-semibol border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implementado(10)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Cerrado(50)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{$slot}}
            </div>
        </div>
    </main>
</body>

</html>
