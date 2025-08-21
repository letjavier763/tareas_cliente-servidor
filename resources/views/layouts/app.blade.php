<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Tareas')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-roboto">

    <!-- Barra superior -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <h1 class="text-xl font-bold text-gray-800">Gestión de Tareas</h1>
            <nav>
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600 px-3">Dashboard</a>
                <a href="{{ route('tareas.index') }}" class="text-gray-700 hover:text-blue-600 px-3">Tareas</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-red-500 px-3">Salir</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Contenedor principal -->
    <main class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

   
    <footer class="bg-white mt-12 shadow-inner">
        <div class="max-w-7xl mx-auto py-4 px-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Gestión de Tareas.
        </div>
    </footer>

</body>
</html>
