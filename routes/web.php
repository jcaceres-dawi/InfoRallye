<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/competitors', [DriverController::class, 'index'])->name('competitors.index');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');