<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostagemController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Deixei o Dash board apenas para o aluno! esse em especifico
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rota de listagem
Route::get('/oportunidades', [PostagemController::class, 'index'])->name('vagas.index');

Route::middleware('auth')->group(function () {
    // Perfil CRUD
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';