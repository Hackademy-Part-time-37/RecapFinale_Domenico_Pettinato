<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/end', function () {
    return view('end');
});
// metodo per generare le tutte le rotte del Controller
//Route::resource('article', ArticleController::class); 

// Elenco lista
Route::get('/article/index',[ArticleController::class, 'index'])->name ('articles.index');

// Form
Route::get('/article/create',[ArticleController::class, 'create'])->name ('articles.create');
Route::post('/article/store',[ArticleController::class, 'store'])->name('articles.store');

// Dettaglio lista patametrica
Route::get('/article/{article}/show',[ArticleController::class, 'show'])->name ('articles.show');

Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/article/{article}', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
