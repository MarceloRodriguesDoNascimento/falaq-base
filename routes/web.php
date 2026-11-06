<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ModeracaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
Route::middleware('auth')->group(function () {
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
});
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
