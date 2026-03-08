<?php

use Illuminate\Support\Facades\Route;

Route::domain('pengobatan.agape.test')->group(function () {
    Route::get('/', function () {
        return 'Pengobatan Agape';
    })->name('index');
});
