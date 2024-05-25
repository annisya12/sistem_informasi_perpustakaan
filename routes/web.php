<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormKelolaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\DaftarHadirController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\DaftarAnggotaController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DashPengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPetugasController;

// Rute tampilan statis
Route::view('/', 'dash');
Route::view('/dash', 'dash');
Route::view('/dashmember', 'dashmember')->name('dash_member');
Route::view('/dashpengunjung', 'dashpengunjung');
Route::view('/petugas', 'petugas');
Route::view('/informasi', 'informasi');
Route::view('/bantuan', 'bantuan');
Route::view('/daftaranggota', 'daftaranggota');
Route::view('/masukanggota', 'masukanggota')->name('masuk_anggota');
Route::view('/daftarhadir', 'daftarhadir');
Route::view('/dashpetugas', 'dashpetugas');
Route::view('/datamember', 'datamember');
Route::view('/datapengunjung', 'datapengunjung');
Route::view('/formkeloladata', 'formkeloladata');
Route::view('/pendaftaranmember', 'pendaftaranmember');
// Route::view('/uploaddatapetugas', 'uploaddatapetugas');
Route::view('/dashkategori', 'dashkategori');
Route::view('/dashkategorip', 'dashkategorip');
Route::view('/dashlaporan', 'dashlaporan');
Route::view('/detailbuku', 'detailbuku');
Route::view('/ebook', 'ebook');
Route::view('/kategorinovel', 'kategorinovel');
Route::view('/bantuanpengunjung', 'bantuanpengunjung');
Route::view('/profilemember', 'profilemember');
Route::view('/profilepetugas', 'profilepetugas');
Route::view('/formpinjamm', 'formpinjamm');
Route::view('/formdatapinjam', 'formdatapinjam');
Route::view('/kategorinovelp', 'kategorinovelp');

// Rute untuk menangani upload
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('upload/', [UploadController::class, 'index'])->name('upload.index');
Route::post('upload/create', [UploadController::class, 'create'])->name('upload.create');
Route::post('upload/store', [UploadController::class, 'store'])->name('upload.store');
Route::post('/upload', 'UploadController@store')->name('upload.store');
Route::get('/uploaddatapetugas', [UploadController::class, 'index']);

// Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
// Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
// Route::get('/upload/create', [UploadController::class, 'create'])->name('upload.create');

// Rute untuk menangani form kelola data
Route::get('/formkeloladata/create', [FormKelolaController::class, 'create'])->name('formkeloladata.create');
Route::post('/formkeloladata', [FormKelolaController::class, 'store'])->name('formkeloladata.store');
Route::get('/dataaktivitas', [FormKelolaController::class, 'index'])->name('dataaktivitas.index');

// Rute untuk daftar hadir
Route::post('/daftarhadir/submit', [DaftarHadirController::class, 'submit'])->name('daftarhadir.submit');
Route::get('/daftar-hadir', [DaftarHadirController::class, 'create'])->name('daftarhadir.create');
Route::post('/daftar-hadir', [DaftarHadirController::class, 'store'])->name('daftarhadir.store');
Route::get('/daftarhadir', [DaftarHadirController::class, 'index'])->name('daftarhadir.index');
Route::post('/daftarhadir', [DaftarHadirController::class, 'store'])->name('daftarhadir.store');

//Rute untuk Loginmember
// Route untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login_member');
// Route untuk proses login
Route::post('/login', [LoginController::class, 'login']);
// Route untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route untuk proses login
Route::post('/login', [LoginController::class, 'login']);
// Route untuk proses login anggota
Route::post('/masukanggota', [LoginController::class, 'login']);
// Route untuk menampilkan halaman login anggota
Route::get('/masukanggota', [LoginController::class, 'showLoginForm'])->name('masukanggota');
// Route untuk proses login anggota
// Route untuk halaman dashboard anggota
Route::get('/dashmember', [LoginController::class, 'dashboard'])->name('dashmember');

//Rute untuk loginpetugas
Route::get('/login', [LoginPetugasController::class, 'showLoginForm'])->name('petugas');
Route::post('/login', [LoginPetugasController::class, 'login'])->name('login');
Route::get('/dashboard', [LoginPetugasController::class, 'dashboard'])->name('dashpetugas');

// Rute untuk daftar anggota
Route::post('/daftaranggota', [DaftarAnggotaController::class, 'store'])->name('daftaranggota.store');
Route::get('/dash', [DashController::class, 'index'])->name('dash');
Route::get('/daftaranggota', function () {
    return view('daftaranggota');
});
Route::post('/daftaranggota', [DaftarAnggotaController::class, 'store'])->name('daftaranggota.store');
Route::get('/datamember', [DaftarAnggotaController::class, 'showDataMember'])->name('datamember');

// Rute untuk peminjaman
Route::post('/store', [PinjamController::class, 'store'])->name('store.submit');
Route::get('/formdatapinjam', [PinjamController::class, 'create'])->name('formdatapinjam');

// Rute resource
Route::resource('/products', FormKelolaController::class);
Route::resource('upload', UploadController::class);

// Rute tambahan untuk proses masuk anggota
Route::post('/masukanggota', function () {
    // Proses data masuk anggota di sini
    return 'Proses masuk anggota berhasil!';
});
