<?php

use App\Http\Controllers\HolidayController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'auth'], function() {

    // Ruta de vista del calendario (Empleados)
    Route::get('/admin/calendar', function () {
        return view('employee.calendar');
    });

    // Ruta de vista de creación de vacaciones (Empleados)
    Route::get('/admin/holiday', function () {
        return view('employee.holiday');
    });

    // Ruta de creación de vacaciones (Empleados)
    Route::post('/admin/create', [HolidayController::class, 'create'])->name('holiday.create');

    // Solo Admin
    Route::group(['middleware' => 'is_admin'], function() {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/admin/user/create', function () {
            return view('admin.user.create');
        });
        
        Route::group(['prefix' => 'admin'], function() {

            Route::group(['prefix' => 'user'], function() {

                // Rutas de usuarios
                Route::get('/', [UserController::class, 'index'])->name('user.index');
                Route::post('/create', [UserController::class, 'create'])->name('user.create');
                Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
                Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
                Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
                Route::put('/{user}', [UserController::class, 'update'])->name('user.update');

            });

            // Rutas de vacaciones
            Route::get('/', [HolidayController::class, 'index'])->name('holiday.index');
            Route::delete('{holiday}', [HolidayController::class, 'destroy'])->name('holiday.destroy');
            Route::get('/{holiday}/edit', [HolidayController::class, 'edit'])->name('holiday.edit');
            Route::get('/{holiday}', [HolidayController::class, 'show'])->name('holiday.show');
            Route::put('/{holiday}', [HolidayController::class, 'update'])->name('holiday.update');

        });
        
    });

});

