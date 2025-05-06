<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RallyController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
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
Route::get('stage/{stage}/results/pdf', [StageController::class, 'generatePdf'])->name('stage.results.pdf');

Route::get('/rankings', [RankingController::class, 'index'])->name('rankings.index');
Route::get('/rankings/{rally}', [RankingController::class, 'show'])->name('rankings.show');
Route::get('/rankings/{rally}/pdf', [RankingController::class, 'downloadPdf'])->name('rankings.pdf');

Route::match(['get', 'post'], '/admin', function (Request $request) {
    // Si ya está autenticado, mostrar el dashboard
    if ($request->session()->get('admin_authenticated') === true) {
        return view('admin.dashboard');
    }

    // Si es POST, validar la contraseña
    if ($request->isMethod('post')) {
        if ($request->password === env('ADMIN_PASSWORD', 'secreta123')) {
            $request->session()->put('admin_authenticated', true);
            return redirect('/admin');
        }
        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }

    // Si no está autenticado y es GET, mostrar el formulario
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/logout', function () {
    session()->forget('admin_authenticated');
    return redirect('/');
})->name('admin.logout');



Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('rallies', Admin\RallyController::class);
    Route::resource('stages', Admin\StageController::class);
    Route::resource('drivers', Admin\DriverController::class);
    Route::resource('codrivers', Admin\CoDriverController::class);
});

