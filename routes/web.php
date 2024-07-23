<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mngr\LoginController;
use App\Http\Controllers\mngr\DashboardController;
use App\Http\Controllers\mngr\AdminUserController;

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

Route::middleware(['auth'])->prefix('mngr')->name('mngr.')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /**admin users */
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

