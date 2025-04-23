<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RallyController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/competitors', [DriverController::class, 'index'])->name('competitors.index');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

Route::get('/rallys/{rally}', [RallyController::class, 'index'])->name('rallys.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/stages/{stage}', [StageController::class, 'show'])->name('stages.show');
