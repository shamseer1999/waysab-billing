<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mngr\LoginController;
use App\Http\Controllers\mngr\DashboardController;

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

Route::get('/', function () {
    return view('mngr.login');
})->name('auth');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

