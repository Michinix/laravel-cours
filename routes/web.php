<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voiture', [VoitureController::class, 'afficherVoiture']);

Route::get('/voitures', [VoitureController::class, 'index'])->name('voiture.index');

Route::get('/voiture/{id}', [VoitureController::class, 'show'])->name('voitures.show');

Route::delete('/voiture/{id}', [VoitureController::class, 'delete'])->name('voitures.delete');

Route::get('/voitures/{id}', [VoitureController::class, 'edit'])->name('voitures.edit');

Route::put('/voitures/{id}', [VoitureController::class, 'update'])->name('voitures.update');

Route::get('/voiture/{$id}/create', [VoitureController::class, 'create'])->name('voitures.create');

Route::post('/voiture', [VoitureController::class, 'store'])->name('voitures.store');
