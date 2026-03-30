@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">Lista de Carreras</h2>

<a href="{{ route('carreras.create') }}" 
   class="bg-red-700 hover:bg-red-800 px-4 py-2 rounded shadow mb-4 inline-block">
    + Nueva Carrera
</a>

<table class="w-full mt-4 border border-red-800 rounded overflow-hidden">
    <thead class="bg-red-900 text-white text-center">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Nombre</th>
            <th class="p-3">Acciones</th>
        </tr>
    </thead>

    <tbody class="bg-gray-900 text-white text-center">
        @forelse($carreras as $carrera)
        <tr class="border-t border-red-800 hover:bg-red-950 transition">
            <td class="p-3">{{ $loop->iteration }}</td>
            <td class="p-3">{{ $carrera->nombre }}</td>
            <td class="p-3 flex justify-center gap-2">
                
                <a href="{{ route('carreras.edit', $carrera->id) }}"
                   class="bg-gray-700 hover:bg-gray-800 px-3 py-1 rounded">
                    Editar
                </a>

                <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST">
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
            <td colspan="3" class="text-center p-4">
                No hay carreras registradas
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection