<?php

use Illuminate\Support\Facades\Route;

Route::domain('bimbel.agape.test')->group(function () {
    Route::get('/', function () {
        return 'Bimbel Agape';
    })->name('index');
});
