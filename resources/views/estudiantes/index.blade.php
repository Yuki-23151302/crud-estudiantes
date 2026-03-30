@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">Lista de Estudiantes</h2>

<a href="/estudiantes/create" 
   class="bg-red-700 hover:bg-red-800 px-4 py-2 rounded shadow mb-4 inline-block">
    + Nuevo Estudiante
</a>

<table class="w-full mt-4 border border-red-800 rounded overflow-hidden">
    <thead class="bg-red-900 text-white text-center">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Nombre</th>
            <th class="p-3">Correo</th>
            <th class="p-3">Carrera</th>
            <th class="p-3">Semestre</th>
            <th class="p-3">Acciones</th>
        </tr>
    </thead>

    <tbody class="bg-gray-900 text-white text-center">
        @forelse($estudiantes as $estudiante)
        <tr class="border-t border-red-800 hover:bg-red-950 transition">
            <td class="p-3 text-center">{{ $loop->iteration }}</td>
            <td class="p-3">{{ $estudiante->nombre }}</td>
            <td class="p-3">{{ $estudiante->correo }}</td>
            <td class="p-3">{{ $estudiante->carrera->nombre }}</td>
            <td class="p-3">{{ $estudiante->semestre }}</td>
            <td class="p-3 flex justify-center gap-2">

                <!-- Editar -->
                <a href="/estudiantes/{{ $estudiante->id }}/edit"
                   class="bg-gray-700 hover:bg-gray-800 px-3 py-1 rounded">
                    Editar
                </a>

                <!-- Eliminar -->
                <form action="/estudiantes/{{ $estudiante->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-700 hover:bg-red-800 px-3 py-1 rounded">
                        Eliminar
                    </button>
                </form>

            </td>
        </tr>

        @empty
        <tr>
            <td colspan="6" class="text-center p-4">
                No hay estudiantes registrados
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection