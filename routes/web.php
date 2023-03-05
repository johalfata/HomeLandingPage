<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'home');

Auth::routes([
    'reset' => false,
    'verify' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('/category', \App\Http\Controllers\CategoryController::class)->except(['show']);

    Route::resource('/ticket', \App\Http\Controllers\TicketController::class);
    Route::put('/updateStatus/{ticket}', [TicketController::class, 'updateStatus'])->name('ticket.update.status');
    Route::put('/storeMessage/{ticket}', [TicketController::class, 'storeComment'])->name('ticket.store.message');

    Route::resource('/user', \App\Http\Controllers\UserController::class);

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])
        ->name('profile.index');
    Route::put('/profile/update/{id}', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update.data');
    Route::put('/profile/password/{id}', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])
        ->name('profile.update.password');
});
