<?php

use App\Http\Controllers\EventoController;
<<<<<<< HEAD
use App\Http\Controllers\ModeracaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
Route::middleware('auth')->group(function () {
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
});
<<<<<<< HEAD
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
Route::post('/eventos/{id}/perguntas', [EventoController::class, 'storePergunta'])
    ->middleware('auth')
    ->name('eventos.perguntas.store');
Route::delete('/perguntas/{pergunta}', [EventoController::class, 'destroyPergunta'])
    ->middleware('auth')
    ->name('perguntas.destroy');
Route::post('/perguntas/{pergunta}/votar', [EventoController::class, 'votar'])
    ->middleware('auth')
    ->name('perguntas.votar');
Route::middleware('auth')->group(function () {
    Route::post('/perguntas/{pergunta}/moderar', [ModeracaoController::class, 'store'])
        ->name('perguntas.moderar');
    Route::get('/eventos/{evento}/moderacoes', [ModeracaoController::class, 'index'])
        ->name('eventos.moderacoes');
    Route::patch('/moderacoes/{moderacao}/status', [ModeracaoController::class, 'updateStatus'])
        ->name('moderacoes.update-status');
});
=======


Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
Route::post('/eventos/{id}/perguntas', [EventoController::class, 'storePergunta'])->name('eventos.perguntas.store');


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');


>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
