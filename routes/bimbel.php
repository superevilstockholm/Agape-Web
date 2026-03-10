<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\AuthController;

Route::domain('bimbel.' . config('app.host'))->name('bimbel.')->group(function () {
    Route::get('/', function () {
        return 'Bimbel Agape';
    })->name('index');

    Route::middleware(['guest'])->group(function () {
        // Login
        Route::get('/login', [AuthController::class, 'bimbel_login_view'])->name('login');
        Route::post('/login', [AuthController::class, 'bimbel_login'])->name('login');
    });

    // Protected
    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'bimbel_logout'])->name('logout');
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            // Admin
            Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
                Route::get('/', fn () => 'admin dashboard')->name('index');
            });
            // Teacher
            Route::middleware(['role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
                Route::get('/', fn () => 'teacher dashboard')->name('index');
            });
            // Student
            Route::middleware(['role:student'])->prefix('student')->name('student.')->group(function () {
                Route::get('/', fn () => 'student dashboard')->name('index');
            });
        });
    });
});
