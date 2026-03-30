<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController; 

Route::get('/', function () {
    return view('welcome');
});

// CRUD de estudiantes
Route::resource('estudiantes', EstudianteController::class);

// CRUD de carreras
Route::resource('carreras', CarreraController::class); 