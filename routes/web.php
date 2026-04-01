<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;

// Redirigir inicio a estudiantes
Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});

// CRUD de estudiantes
Route::resource('estudiantes', EstudianteController::class);

// CRUD de carreras
Route::resource('carreras', CarreraController::class);