<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Proyecto');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Proyecto rutas
    Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
    Route::delete('/proyecto/delete/{id}', [ProyectoController::class, 'destroy'])->name('proyecto.destroy');
    Route::get('/proyecto/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');
    Route::get('/proyecto/delete/{id}', [ProyectoController::class, 'destroy']);
    Route::get('/proyecto/create', [ProyectoController::class, 'create'])->name('proyectos.create');
    Route::post('/proyecto/store', [ProyectoController::class, 'store'])->name('proyectos.store');
    Route::get('/proyecto/createParticipante/{id}', [ProyectoController::class, 'create'])->name('proyectos.create');
    Route::post('/proyecto/store', [ProyectoController::class, 'store'])->name('proyectos.store');
});


require __DIR__ . '/auth.php';
