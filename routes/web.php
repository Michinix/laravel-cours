<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');

Route::get('/voiture/create', [VoitureController::class, 'create'])->name('voitures.create');

Route::get('/voiture/{id}', [VoitureController::class, 'show'])->name('voitures.show');

Route::get('/voitures/{id}', [VoitureController::class, 'edit'])->name('voitures.edit');

Route::post('/voiture', [VoitureController::class, 'store'])->name('voitures.store');

Route::put('/voitures/{id}', [VoitureController::class, 'update'])->name('voitures.update');

Route::delete('/voiture/{id}', [VoitureController::class, 'delete'])->name('voitures.delete');

