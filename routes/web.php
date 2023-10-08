<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::prefix('list')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('list');
    Route::get('/add', [DashboardController::class, 'add'])->name('tambah');
    Route::post('/store', [DashboardController::class, 'store'])->name('store');
    Route::delete('/delete', [DashboardController::class, 'delete'])->name('delete');
});
