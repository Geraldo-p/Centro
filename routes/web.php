<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ModuloController;
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
    Route::get("/generate-pdf/categoria", [CategoriaController::class, 'generatePdf'])->name("categorias.pdf");


    // curso
    Route::resource('cursos', CursoController::class)->names([
        'index' => 'cursos.index',
        'create' => 'cursos.create',
        'store' => 'cursos.store',
        'show' => 'cursos.show',
        'edit' => 'cursos.edit',
        'update' => 'cursos.update',
        'destroy' => 'cursos.destroy'
    ]);
    Route::get("/generate-pdf/curso", [CursoController::class, 'generatePdf'])->name("cursos.pdf");

    // MODULOS
    Route::resource('modulos', ModuloController::class)->names([
        'index' => 'modulos.index',
        'create' => 'modulos.create',
        'store' => 'modulos.store',
        'show' => 'modulos.show',
        'edit' => 'modulos.edit',
        'update' => 'modulos.update',
        'destroy' => 'modulos.destroy'
    ]);
    Route::get("/generate-pdf/modulo", [ModuloController::class, 'generatePdf'])->name("modulos.pdf");

    // DEPARTAMENTO
    Route::resource('departamentos', DepartamentoController::class)->names([
        'index' => 'departamentos.index',
        'create' => 'departamentos.create',
        'store' => 'departamentos.store',
        'show' => 'departamentos.show',
        'edit' => 'departamentos.edit',
        'update' => 'departamentos.update',
        'destroy' => 'departamentos.destroy'
    ]);
    Route::get("/generate-pdf/departamento", [DepartamentoController::class, 'generatePdf'])->name("departamentos.pdf");


    // Funcionario
    Route::resource('funcionarios', FuncionarioController::class)->names([
        'index' => 'funcionarios.index',
        'create' => 'funcionarios.create',
        'store' => 'funcionarios.store',
        'show' => 'funcionarios.show',
        'edit' => 'funcionarios.edit',
        'update' => 'funcionarios.update',
        'destroy' => 'funcionarios.destroy'
    ]);
    Route::get("/generate-pdf/funcionario", [FuncionarioController::class, 'generatePdf'])->name("funcionarios.pdf");
});

require __DIR__ . '/auth.php';
