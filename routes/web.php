<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

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

// Route::view('/', 'landing-page/index');
Route::get('/Admin', function () {
    return redirect('/dashboard/admin');
});

Route::get('/Karyawan', function () {
    return redirect('/dashboard/karyawan');
});

Route::middleware(['guest'])->group(function () {
    Route::view('/', 'landing-page/index');
    Route::middleware(['guest.redirect'])->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'login_action']);
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/register2', [AuthController::class, 'register2'])->name('register2');
        Route::post('/uploadreg', [AuthController::class, 'upload'])->name('ckeditor.uploadreg');
        Route::post('/register', [AuthController::class, 'register_action']);
        Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard/superAdmin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/dashboard/karyawan', [DashboardController::class, 'karyawan'])->name('dashboard.karyawan');

    Route::middleware(['UserAkses:Super Admin'])->group(function () {
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::post('/kategori', [KategoriController::class, 'tambah_action']);
        Route::post('/kategori/{id}/edit', [KategoriController::class, 'edit_action']);
        Route::get('/kategori/{id}/hapus', [KategoriController::class, 'hapus_action']);

        Route::get('/operator_admin', [AuthController::class, 'operator_admin'])->name('operator.admin');

        Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
        Route::get('/wisata_tambah', [WisataController::class, 'wisata_tambah'])->name('wisata_tambah');
        Route::get('/wisata_edit', [WisataController::class, 'wisata_edit'])->name('wisata_edit');
        Route::post('/upload', [WisataController::class, 'upload'])->name('ckeditor.upload');
    });

    Route::middleware(['UserAkses:Admin'])->group(function () {
        Route::get('/paket_wisata', [PaketController::class, 'index'])->name('paket_wisata');
        Route::get('/paket_tambah', [PaketController::class, 'paket_tambah'])->name('paket_tambah');
        Route::post('/paket_tambah', [PaketController::class, 'tambah_action']);
        Route::get('/paket_edit/{id}', [PaketController::class, 'paket_edit'])->name('paket_edit');
        Route::post('/paket_edit/{id}', [PaketController::class, 'edit_action']);
        Route::post('/uploadpkt', [PaketController::class, 'uploadpkt'])->name('ckeditor.uploadpkt');

        Route::get('/operator_karyawan', [AuthController::class, 'operator_karyawan'])->name('operator.karyawan');
    });

    Route::middleware(['UserAkses:Karyawan'])->group(function () {
        Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
        Route::get('/pembayaran_detail', [PembayaranController::class, 'pembayaran_detail'])->name('pembayaran_detail');

        Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');


        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

        Route::get('/rekap', [TransaksiController::class, 'rekap'])->name('rekap');
    });
});

Route::get('/', function () {
    return view('landing-page.landing');
});

Route::get('/harga', function () {
    return view('landing-page.InformasiTiket.hargatiket');
});

Route::get('/faq', function () {
    return view('landing-page.InformasiTiket.faq');
});

Route::get('/kontak', function () {
    return view('landing-page.KontakKami.kontak');
});

Route::get('/cek', function () {
    return view('landing-page.CekTiket.cektiket');
});

Route::get('/canceltiket', function () {
    return view('landing-page.Pembatalan.bataltiket');
});

Route::get('/detailwisata', function () {
    return view('landing-page.InformasiTiket.detailwisata');
});

Route::get('/paket', function () {
    return view('landing-page.InformasiTiket.pilihpaket');
});

Route::get('/konfirmasi', function () {
    return view('landing-page.InformasiTiket.konfirmasitiket');
});

Route::get('/detailtiket', function () {
    return view('landing-page.CekTiket.detail');
});
