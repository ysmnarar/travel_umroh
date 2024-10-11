<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;

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
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/home', 'Index')->name('index.home');
            Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
        });

        Route::controller(JamaahController::class)->group(function () {
            // Route untuk halaman data jamaah
            Route::get('jamaah', 'index')->name('admin.jamaah.index');

            // Route untuk menambah data jamaah
            Route::get('jamaah/create', 'create')->name('admin.jamaah.create');
            Route::post('jamaah', 'store')->name('admin.jamaah.store');

            // Route untuk edit data jamaah
            Route::get('jamaah/{id}/edit', 'edit')->name('admin.jamaah.edit');
            Route::put('jamaah/{id}', 'update')->name('admin.jamaah.update');

            // Route untuk menghapus data jamaah
            Route::delete('jamaah/{id}', 'destroy')->name('admin.jamaah.destroy');

            // Route untuk menampilkan detail data jamaah
            Route::get('jamaah/{id}', 'show')->name('admin.jamaah.show');

            // Route untuk export data jamaah ke CSV/XLXS
            Route::get('jamaah/export', 'export')->name('admin.jamaah.export');
        });

        // Routes untuk Kamar
        Route::controller(KamarController::class)->group(function () {
            Route::get('kamar', 'index')->name('admin.kamar.index');
            Route::get('kamar/create', 'create')->name('admin.kamar.create');
            Route::post('kamar', 'store')->name('admin.kamar.store');
            Route::get('kamar/{id}/edit', 'edit')->name('admin.kamar.edit');
            Route::put('kamar/{id}', 'update')->name('admin.kamar.update');
            Route::delete('kamar/{id}', 'destroy')->name('admin.kamar.destroy');
        });

        // Routes untuk Paket
        Route::controller(PaketController::class)->group(function () {
            Route::get('paket', 'index')->name('admin.paket.index');
            Route::get('paket/create', 'create')->name('admin.paket.create');
            Route::post('paket', 'store')->name('admin.paket.store');
            Route::get('paket/{id}/edit', 'edit')->name('admin.paket.edit');
            Route::put('paket/{id}', 'update')->name('admin.paket.update');
            Route::delete('paket/{id}', 'destroy')->name('admin.paket.destroy');
        });
    });
});

Route::controller(ExportController::class)->group(function () {
    Route::get('export', 'index')->name('admin.export.index');
    Route::get('export/create', 'create')->name('admin.export.create');
    Route::post('export', 'store')->name('admin.export.store');
    Route::get('export/{id}/edit', 'edit')->name('admin.export.edit');
    Route::put('export/{id}', 'update')->name('admin.export.update');
    Route::delete('export/{id}', 'destroy')->name('admin.export.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
