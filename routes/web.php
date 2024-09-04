<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// metodo per generare le tutte le rotte del Controller
Route::resource('article', ArticleController::class); 