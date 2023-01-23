<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use App\Http\Controllers\user\PengembalianController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/peminjaman/riwayat', [PeminjamanController::class , 'riwayatPeminjaman'])->name('user.riwayat.peminjaman');
    Route::get('/form_peminjaman' , [PeminjamanController::class , 'indexForm'])->name('user.form.peminjaman');
    Route::post('/form_peminjaman' , [PeminjamanController::class , 'form']);
    Route::post('/peminjaman/submit' , [PeminjamanController::class , 'store'])->name('submit.peminjaman');
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('user.pengembalian');
    Route::get('/pengembalian/riwayat', [PengembalianController::class, 'riwayatPengembalian'])->name('user.riwayat.pengembalian');
    Route::post('/pengembalian/submit' , [PengembalianController::class , 'store'])->name('submit.pengembalian');

    Route::get('/pesan', function(){
        return view('user.pesan');
    })->name('user.pesan');

    Route::get('/profil', function(){
        return view('user.profil');
    })->name('user.profil');
});

Route::prefix('/admin')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

