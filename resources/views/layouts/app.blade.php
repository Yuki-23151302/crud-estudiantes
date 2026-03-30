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
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">CRUD Estudiantes</h1>
            <a href="/estudiantes" class="hover:text-red-300">Inicio</a>
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