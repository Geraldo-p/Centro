<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/categoria', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');
    Route::get('/categoria/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
    Route::get("/categoria/pdf", [CategoriaController::class, 'generatePdf'])->name("categorias.pdf");
});

require __DIR__ . '/auth.php';
