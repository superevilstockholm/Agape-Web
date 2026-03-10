<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\AuthController;

Route::domain('pengobatan.' . config('app.host'))->name('pengobatan.')->group(function () {
    Route::get('/', function () {
        return 'Pengobatan Agape';
    })->name('index');

    Route::middleware(['guest'])->group(function () {
        // Login
        Route::get('/login', [AuthController::class, 'pengobatan_login_view'])->name('login');
        Route::post('/login', [AuthController::class, 'pengobatan_login'])->name('login');
    });

    // Protected
    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'pengobatan_logout'])->name('logout');
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            // Admin
            Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
                Route::get('/', fn () => 'admin dashboard')->name('index');
            });
        });
    });
});
