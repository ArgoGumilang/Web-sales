<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // ← Tambahkan ini
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InputDataController;



// ... route lainnya

Route::get('/data-input', [InputDataController::class, 'index'])->name('data.input');




// Route Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route utama
Route::get('/', function () {
    return view('welcome');
});

// Route yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Manajemen Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD User
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::resource('users', UserController::class)->except(['create', 'store']);
    //role authorization
    Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->role === 0 || $user->role === 'super_admin') {
        return view('dashboard.superadmin');
    }

    return view('dashboard.regular');
    })->name('dashboard')->middleware('auth');

});
