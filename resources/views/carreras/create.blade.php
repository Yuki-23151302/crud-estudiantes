@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">Registrar Nueva Carrera</h2>

@if($errors->any())
    <div class="bg-red-700 p-3 mb-4 rounded">
        <ul>
            @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('carreras.store') }}" method="POST" class="bg-gray-900 p-6 rounded shadow-md">
    @csrf

    <!-- Nombre -->
    <div class="mb-4">
        <label class="block mb-1">Nombre</label>
        <input type="text" name="nombre" 
               class="w-full p-2 rounded bg-black border border-red-700" required>
    </div>

    <button class="bg-red-700 hover:bg-red-800 px-4 py-2 rounded">
        Guardar
    </button>
    <a href="{{ route('carreras.index') }}" class="bg-gray-700 hover:bg-gray-800 px-4 py-2 rounded ml-2">
        Cancelar
    </a>
</form>

@endsection