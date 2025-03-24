<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/competitors', [DriverController::class, 'index'])->name('competitors.index');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
