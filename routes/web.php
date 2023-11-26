<?php
use App\Http\Controllers\PpdbController;

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

Route::get('/', [PpdbController::class, 'beranda']);

Route::middleware('isGuest')->group(function () {
    Route::get('/login', [PpdbController::class, 'login'])->name('login');
    Route::post('/login/auth', [PpdbController::class, 'auth'])->name('login.auth');
    Route::get('/daftar', [PpdbController::class, 'daftar'])->name('daftar');
    Route::post('/store', [PpdbController::class, 'store'])->name('store');
    Route::get('/print', [PpdbController::class, 'print'])->name('print');
});

Route::middleware(['isLogin', 'cekRole:admin,student'])->group(function(){
    Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/pembayaran', [PpdbController::class, 'pembayaran'])->name('pembayaran');
});

Route::middleware(['isLogin', 'cekRole:student'])->group(function(){
    Route::post('/postPayment', [PpdbController::class, 'postPayment'])->name('postPayment');
    Route::patch('/pembayaran/update', [PpdbController::class, 'pembayaran_update'])->name('pembayaran.update');
});

Route::middleware(['isLogin', 'cekRole:admin'])->group(function(){
    Route::get('/dashboard/bukti_pembayaran/{user_id}', [PpdbController::class, 'bukti_pembayaran'])->name('bukti');
    Route::get('/dashboard/detail_pendaftaran/{user_id}', [PpdbController::class, 'detail_pendaftaran'])->name('detail.pendaftaran');
    Route::patch('/dashboard/pembayaran/validasi/{user_id}', [PpdbController::class, 'validasi'])->name('validasi');
    Route::patch('/dashboard/pembayaran/tolak/{user_id}', [PpdbController::class, 'tolak'])->name('tolak');
});


Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');
Route::get('/error', [PpdbController::class, 'error'])->name('error');

