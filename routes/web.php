<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('voitures.index');
});

Route::get('/voiture', [VoitureController::class, 'afficherVoiture']);

Route::get('/voitures', [VoitureController::class, 'index']);

Route::get('/voiture/{id}', [VoitureController::class, 'show'])->name('voitures.show');

Route::delete('/voiture/{id}', [VoitureController::class, 'delete'])->name('voitures.delete');
