<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flowers', [FlowerController::class, 'index'])->name('flowers.index');

Route::get('/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');

Route::get('/flowers/{flower}', [FlowerController::class, 'show'])->name('flowers.show');

Route::post('/flowers', [FlowerController::class, 'store'])->name('flowers.store');

Route::delete('/flowers/{flower}', [FlowerController::class, 'destroy'])->name('flowers.destroy');

Route::put('/flowers/{flower}', [FlowerController::class, 'update'])->name('flowers.update');

Route::get('/flowers/{flower}/edit', [FlowerController::class, 'edit'])->name('flowers.edit');
