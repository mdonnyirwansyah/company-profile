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
    Route::prefix('tentang')->name('tentang.')->group(function () {
        Route::prefix('profil')->name('profil.')->group(function () {
            Route::get('', [\App\Http\Controllers\Backend\ProfilController::class, 'index'])->name('index');
            Route::post('', [\App\Http\Controllers\Backend\ProfilController::class, 'store'])->name('store');
            Route::put('{profil}', [\App\Http\Controllers\Backend\ProfilController::class, 'update'])->name('update');
        });
        Route::prefix('visi-misi')->name('visi-misi.')->group(function () {
            Route::get('', [\App\Http\Controllers\Backend\VisiMisiController::class, 'index'])->name('index');
            Route::post('', [\App\Http\Controllers\Backend\VisiMisiController::class, 'store'])->name('store');
            Route::put('{visi_misi}', [\App\Http\Controllers\Backend\VisiMisiController::class, 'update'])->name('update');
        });
        Route::prefix('struktur-organisasi')->name('struktur-organisasi.')->group(function () {
            Route::get('', [\App\Http\Controllers\Backend\StrukturOrganisasiController::class, 'index'])->name('index');
            Route::post('', [\App\Http\Controllers\Backend\StrukturOrganisasiController::class, 'store'])->name('store');
            Route::put('{struktur_organisasi}', [\App\Http\Controllers\Backend\StrukturOrganisasiController::class, 'update'])->name('update');
        });
        Route::prefix('dasar-hukum')->name('dasar-hukum.')->group(function () {
            Route::get('', [\App\Http\Controllers\Backend\DasarHukumController::class, 'index'])->name('index');
            Route::post('', [\App\Http\Controllers\Backend\DasarHukumController::class, 'store'])->name('store');
            Route::put('{dasar_hukum}', [\App\Http\Controllers\Backend\DasarHukumController::class, 'update'])->name('update');
        });
    });

    Route::prefix('unit-usaha')->name('unit-usaha.')->group(function () {
        Route::get('', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'index'])->name('index');
        Route::get('create', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'create'])->name('create');
        Route::post('', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'store'])->name('store');
        Route::get('{unit_usaha:slug}/edit', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'edit'])->name('edit');
        Route::put('{unit_usaha:slug}', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'update'])->name('update');
        Route::delete('{unit_usaha:slug}', [\App\Http\Controllers\Backend\UnitUsahaController::class, 'destroy'])->name('destroy');
    });

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('', [\App\Http\Controllers\ProfileController::class, 'show'])->name('show');
        Route::put('', [\App\Http\Controllers\ProfileController::class, 'update'])->name('update');
    });
});
