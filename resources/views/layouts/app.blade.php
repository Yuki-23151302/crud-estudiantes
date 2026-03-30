<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Estudiantes</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #0f0f0f; /* negro profundo */
        }
    </style>
</head>
<body class="text-white">

    <!-- Navbar -->
    <nav class="bg-red-900 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">CRUD Colegio</h1>
            <div class="space-x-4">
                <a href="{{ route('estudiantes.index') }}" 
                   class="hover:text-red-300 {{ request()->routeIs('estudiantes.*') ? 'underline' : '' }}">
                    Estudiantes
                </a>
                <a href="{{ route('carreras.index') }}" 
                   class="hover:text-red-300 {{ request()->routeIs('carreras.*') ? 'underline' : '' }}">
                    Carreras
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container mx-auto mt-8 p-4">
        @if(session('success'))
        <div class="bg-green-700 text-white p-3 rounded mb-4 text-center">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

</body>
</html>