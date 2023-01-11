<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pemberitahuan;


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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function() {
    Route::get('/dashboard', function() {
        $pemberitahuan = Pemberitahuan::where('status', 'aktif')->get();
        $buku = Buku::all();

        return view('user.dashboard', compact('pemberitahuan', 'buku'));
    })->name('user.dashboard');

    Route::post('/form_peminjaman', function (Request $request) {
        $buku_id = $request->buku_id;
        $buku = Buku::all();

        return view('user.form_peminjaman',  compact('buku_id', 'buku'));
    })->name('user.form_peminjaman_dashboard');

    Route::get('/peminjaman', function(){
        $peminjaman = Peminjaman::where('user_id', Auth::user()->id)->get();
        
        return view('user.peminjaman', compact('peminjaman'));  
    })->name('user.peminjaman');

});