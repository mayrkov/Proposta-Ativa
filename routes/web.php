<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContrapropostaController;
use App\Http\Controllers\PostagemController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rota de listagem
Route::get('/oportunidades', [PostagemController::class, 'index'])->name('vagas.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rota da Contraproposta (
    Route::post('/contraproposta/enviar/{id}', [ContrapropostaController::class, 'store'])->name('contraproposta.store');
});


require __DIR__.'/auth.php';