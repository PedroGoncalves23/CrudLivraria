<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\MidiaController;
use App\Models\Editora;

Route::get('/', function () {
    return view('welcome');
});

// ROTAS AUTOR
    Route::get('/autor', [AutorController::class, 'index'])->name('autor.index');
    Route::get('/autor/create', [AutorController::class, 'create'])->name('autor.create');
    Route::post('/autor', [AutorController::class, 'store'])->name('autor.store');
    Route::get('/autor/{id}', [AutorController::class, 'show'])->name('autor.show');
    Route::delete('/autor/{id}', [AutorController::class, 'destroy'])->name('autor.destroy');
    Route::get('/autor/edit/{id}', [AutorController::class, 'edit'])->name('autor.edit');
    Route::put('/autor/{id}', [AutorController::class, 'update'])->name('autor.update');

// ROTAS LIVROS

    Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
    Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
    Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
    Route::get('/livros/{id}', [LivroController::class, 'show'])->name('livros.show');
    Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');
    Route::get('/livros/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');
    Route::put('/livros/{id}', [LivroController::class, 'update'])->name('livros.update');

// ROTAS 



    Route::get('/editoras', [EditoraController::class, 'index'])->name('editoras.index');
    Route::get('/editoras/create' ,[EditoraController::class, 'create'])->name('editoras.create'); 
    Route::post('/editoras', [EditoraController::class, 'store'])->name('editoras.store');
    Route::get('/editoras/{id}', [EditoraController::class, 'show'])->name('editoras.show');
    Route::delete('/editoras/{id}', [EditoraController::class, 'destroy'])->name('editoras.destroy');
    Route::get('/editoras/edit/{id}', [EditoraController::class, 'edit'])->name('editoras.edit');
    Route::put('/editoras/{id}', [EditoraController::class, 'update'])->name('editoras.update');

// ROTA SEARCH
    Route::any('/livros/search', [LivroController::class,'search'])->name('livros.search');
    
Route::resource('midias', MidiaController::class);












