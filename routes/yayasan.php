<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return 'Yayasan Agape';
})->name('index');

Route::middleware(['guest'])->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'login_view'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Protected
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Admin
        Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
            Route::get('/', fn () => 'admin dashboard')->name('index');
        });
    });
});
