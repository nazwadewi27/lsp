<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\Pemberitahuan;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    Route::get('/peminjaman/riwayat', [PeminjamanController::class, 'index'])->name('user.peminjaman');
    Route::get('/form_peminjaman', [PeminjamanController::class, 'indexForm'])->name('user.form_peminjaman_dashboard');
    Route::post('/form_peminjaman', [PeminjamanController::class, 'form']);
    Route::post('/peminjaman/submit', [PeminjamanController::class, 'store'])->name('submit.peminjaman');
    

    Route::get('/pengembalian', function(){
        return view('user.pengembalian');
    })->name('user.pengembalian');

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

