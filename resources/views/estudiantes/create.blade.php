@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">Registrar Estudiante</h2>

@if($errors->any())
    <div class="bg-red-700 p-3 mb-4 rounded">
        <ul>
            @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/estudiantes" method="POST" class="bg-gray-900 p-6 rounded shadow-md">

    @csrf

    <!-- Nombre -->
    <div class="mb-4">
        <label class="block mb-1">Nombre</label>
        <input type="text" name="nombre" 
               class="w-full p-2 rounded bg-black border border-red-700">
    </div>

    <!-- Correo -->
    <div class="mb-4">
        <label class="block mb-1">Correo</label>
        <input type="email" name="correo" 
               class="w-full p-2 rounded bg-black border border-red-700">
    </div>

    <!-- Carrera -->
    <div class="mb-4">
        <label class="block mb-1">Carrera</label>
        <select name="carrera_id" 
                class="w-full p-2 rounded bg-black border border-red-700">
            @foreach($carreras as $carrera)
                <option value="{{ $carrera->id }}">
                    {{ $carrera->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Semestre -->
    <div class="mb-4">
        <label class="block mb-1">Semestre</label>
        <input type="number" name="semestre" 
               class="w-full p-2 rounded bg-black border border-red-700">
    </div>

    <button class="bg-red-700 hover:bg-red-800 px-4 py-2 rounded">
        Guardar
    </button>

</form>

@endsection