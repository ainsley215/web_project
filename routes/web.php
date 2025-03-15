<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengalamanKerjaController;
use Illuminate\Support\Facades\Auth;

// Route dasar
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Halo, $name!";
});

Route::get('/', function () {
    return view('home');
});

// Route GET untuk daftar pengguna
Route::get('/user', [UserController::class, 'index']);

// Route redirect ke profil pengguna
Route::get('/redirect-profile', [UserController::class, 'redirectToProfile']);

// Route View untuk halaman profil
Route::view('/profile', 'profile')->name('profile');

// Route untuk halaman profil dengan nama 'profile'
Route::get('/profile', function () {
    return 'Ini adalah halaman profil pengguna';
})->name('profile');

// Route POST untuk menyimpan pengguna baru
Route::post('/user', [UserController::class, 'store']);

// Route PUT untuk memperbarui pengguna
Route::put('/user/{id}', [UserController::class, 'update']);

// Route PATCH untuk memperbarui sebagian data pengguna
Route::patch('/user/{id}', [UserController::class, 'updatePartial']);

// Route DELETE untuk menghapus pengguna
Route::delete('/user/{id}', [UserController::class, 'destroy']);

// Route match (GET dan POST)
Route::match(['get', 'post'], '/user/action', [UserController::class, 'handle']);

// Route any (semua metode HTTP)
Route::any('/user/any', [UserController::class, 'handleAny']);

// Redirect Route
Route::redirect('/old-route', '/user');

// Fallback jika tidak ada route yang cocok
Route::fallback(function () {
    return response()->json(['message' => 'Halaman tidak ditemukan!'], 404);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengalaman_kerja', [PengalamanKerjaController::class, 'index'])->name('pengalaman_kerja.index');
Route::get('/pengalaman_kerja/create', [PengalamanKerjaController::class, 'create'])->name('pengalaman_kerja.create');



