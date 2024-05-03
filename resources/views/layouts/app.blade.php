<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    <title>Devstagra | @yield('title')</title>
    <!-- Importación de Tailwind -->
    @vite('resources/css/app.css')
    @vite('resources/css/stylesls.css')

</head>

<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow mb-2">
        <div class="container mx-auto flex justify-between items-center">
            <h1>DevStagram</h1>

            <nav class="flex gap-3 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                <a class="font-bold uppercase text-blue-400 text-sm" href="{{route('register')}}">Crear Usuario</a>
            </nav>

        </div>

    </header>

    <main class="container mx-auto mt-10">

        <div class="main-title py-2 mb-5">
            @yield('title')
        </div>


        @yield('contenido')

    </main>

    <footer class="text-center p-5 text-gray-500 font-bold mt-16">
        TODOS LOS DERECHOS RESERVADOS {{ now()->year}}

    </footer>

</body>

</html>