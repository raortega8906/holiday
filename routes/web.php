<?php

use App\Http\Controllers\HolidayController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta principal login
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

    // Ruta de vista del calendario (Empleados)
    Route::get('/calendar', function () {
        return view('employee.calendar');
    });

    // Ruta de vista de creación de vacaciones (Empleados)
    Route::get('/holiday', function () {
        return view('employee.holiday');
    });

    // Ruta historial de vacaciones (Admin: todas, Empleados: personales)
    Route::get('/', [HolidayController::class, 'index'])->name('holiday.index');

    // Ruta de creación de vacaciones (Empleados)
    Route::post('/create', [HolidayController::class, 'create'])->name('holiday.create');

    // Solo Admin
    Route::group(['middleware' => 'is_admin'], function() {

        Route::group(['prefix' => 'user'], function() {

            // Ruta de vista de creación de usuarios
            Route::get('/create', function () {
                return view('admin.user.create');
            });

            // Rutas de usuarios
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::post('/create', [UserController::class, 'create'])->name('user.create');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');

        });

        // Rutas de vacaciones
        Route::get('/{holiday}', [HolidayController::class, 'show'])->name('holiday.show');
        Route::get('/{holiday}/edit', [HolidayController::class, 'edit'])->name('holiday.edit');
        Route::put('/{holiday}', [HolidayController::class, 'update'])->name('holiday.update');
        Route::delete('{holiday}', [HolidayController::class, 'destroy'])->name('holiday.destroy');
        
    });

});
