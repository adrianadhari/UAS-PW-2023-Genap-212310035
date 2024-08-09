<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\UserTicketController;

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
Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'store']);


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware(['auth', 'admin'])->prefix('dashboard-admin')->as('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/events', AdminEventController::class);
    Route::resource('/messages', AdminMessageController::class);
    Route::resource('/users', AdminUserController::class);
});


Route::middleware(['auth', 'user'])->prefix('dashboard-user')->as('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('dashboard');
    Route::resource('/events', UserEventController::class);
    Route::resource('/tickets', UserTicketController::class);
});


Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/updateDataProfile', [ProfileController::class, 'updateDataProfile']);
    Route::post('/updateDataPassword', [ProfileController::class, 'updateDataPassword']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

