<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'account.active'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/settings', [SettingsController::class, 'index']);

});

Route::get('/login', function () {
    return "Login page";
})->name('login');
