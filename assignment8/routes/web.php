<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', fn() => 'Author Page')->name('authors.show');
