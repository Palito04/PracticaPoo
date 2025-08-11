<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Galería de Arte')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    
    <!-- Título -->
    <header class="text-center my-8">
        <h1 class="text-4xl font-bold text-gray-900">Galería de Arte</h1>
    </header>
    <x-menu/>


    <main class="flex-grow">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        © 2025 Galería de Arte. Todos los derechos reservados.
    </footer>

</body>
</html>
