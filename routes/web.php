<?php

use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([CheckRolAdmin::class])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/admin', function () {
        return view('admin.admin');
    });

    Route::get('/admin/inbox', function () {
        return view('admin.mailbox.inbox');
    });

    Route::get('/admin/compose', function () {
        return view('admin.mailbox.compose');
    });

    Route::get('/admin/read', function () {
        return view('admin.mailbox.read');
    });

    Route::get('admin', [App\Http\Controllers\HolidayController::class, 'index'])->name('holiday.index');

    Route::delete('admin/{holiday}', [App\Http\Controllers\HolidayController::class, 'destroy'])->name('holiday.destroy');

    Route::get('/admin/{holiday}/edit', [App\Http\Controllers\HolidayController::class, 'edit'])->name('holiday.edit');

    Route::put('/admin/{holiday}', [App\Http\Controllers\HolidayController::class, 'update'])->name('holiday.update');

});

Route::post('/admin/create', [App\Http\Controllers\HolidayController::class, 'create'])->name('holiday.create');

Route::get('/admin/calendar', function () {
    return view('employee.calendar');
});

Route::get('/admin/holiday', function () {
    return view('employee.holiday');
});

Route::get('/mail', [MailController::class, 'getMail']);
