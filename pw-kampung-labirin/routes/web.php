<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\KelolaEventController;
use App\Http\Controllers\DashboardUserController;

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
    return view('user.beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/kuliner', function () {
    return view('user.kuliner', [
        "title" => "Kuliner"
    ]);
});

Route::get('/atraksi', function () {
    return view('user.atraksi', [
        "title" => "Atraksi"
    ]);
});

Route::get('/dashboard', [DashboardUserController::class, 'index'])->middleware('auth');
Route::get('/dashboard/reservasi-event', [DashboardUserController::class, 'reservasiEvent'])->middleware('auth');
Route::post('/dashboard/reservasi-event', [DashboardUserController::class, 'store'])->middleware('auth');
Route::get('/dashboard/kelola-event', [DashboardUserController::class, 'kelolaEvent'])->middleware('auth');

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::post('/profil', [ProfilController::class, 'update'])->middleware('auth');

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'store']);

Route::get('/masuk', [MasukController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [MasukController::class, 'logout'])->middleware('auth');

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store'])->middleware('guest');

Route::get('/admin', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware('admin');

Route::get('/admin/kelola-event', [KelolaEventController::class, 'index'])->middleware('admin');

Route::get('/admin/kelola-user', [KelolaUserController::class, 'index'])->middleware('admin');
Route::get('/admin/kelola-user/{id}', [KelolaUserController::class, 'show'])->middleware('admin');
Route::post('/admin/kelola-user/{id}', [KelolaUserController::class, 'store'])->middleware('admin');
// Route::post('/admin/kelola-user/{id}', [KelolaUserController::class, 'destroy'])->middleware('admin');

Route::get('/admin/pesan', [MessageController::class, 'index'])->middleware('admin');
