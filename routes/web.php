<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animal.create');
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('animal.update')
        ->where('id', '[0-9]+');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animal.delete')
        ->where('id', '[0-9]+');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.show')
        ->where('id', '[0-9]+');
});

Route::fallback(function () {
    return view('errors.404');
});
