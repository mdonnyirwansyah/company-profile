<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::prefix('tentang')->name('tentang.profil.')->group(function () {
        Route::get('profil', [\App\Http\Controllers\Backend\ProfilController::class, 'index'])->name('index');
        Route::post('profil', [\App\Http\Controllers\Backend\ProfilController::class, 'store'])->name('store');
        Route::put('profil/{profil}', [\App\Http\Controllers\Backend\ProfilController::class, 'update'])->name('update');
    });

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
