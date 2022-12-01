<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Auth;
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
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::prefix('schedule')->group(function(){
    Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
    // Route::post('/store', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');
    // Route::get('/edit/{id}', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedule.edit');
    // Route::post('/update/{id}', [App\Http\Controllers\ScheduleController::class, 'update'])->name('schedule.update');
    // Route::get('/delete/{id}', [App\Http\Controllers\ScheduleController::class, 'delete'])->name('schedule.delete');

});

Route::prefix('booking')->group(function(){
    Route::get('/', [BookingController::class, 'index'])->name('booking.index');
});

