<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRolAdmin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

// Ruta principal login
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {

    // Ruta del calendario
    Route::get('/admin/calendar', function () {
        return view('employee.calendar');
    });

    // Ruta de creación de vacaciones
    Route::get('/admin/holiday', function () {
        return view('employee.holiday');
    });

    Route::post('/admin/create', [App\Http\Controllers\HolidayController::class, 'create'])->name('holiday.create');

    Route::middleware([CheckRolAdmin::class])->group(function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // Route::get('/admin', function () {
        //     return view('admin.admin');
        // });

        Route::get('/admin/user/create', function () {
            return view('admin.user.create');
        });

        // Rutas de usuarios
        Route::get('admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

        Route::post('/admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

        Route::delete('admin/user/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

        Route::get('/admin/user/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

        Route::get('/admin/user/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');

        Route::put('/admin/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

        // Rutas de vacaciones
        Route::get('admin', [App\Http\Controllers\HolidayController::class, 'index'])->name('holiday.index');

        Route::delete('admin/{holiday}', [App\Http\Controllers\HolidayController::class, 'destroy'])->name('holiday.destroy');

        Route::get('/admin/{holiday}/edit', [App\Http\Controllers\HolidayController::class, 'edit'])->name('holiday.edit');

        Route::get('/admin/{holiday}', [App\Http\Controllers\HolidayController::class, 'show'])->name('holiday.show');

        Route::put('/admin/{holiday}', [App\Http\Controllers\HolidayController::class, 'update'])->name('holiday.update');

    });

});

