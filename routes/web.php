<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\RakbukuController;
use App\Models\Peminjam;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Book
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::DELETE('/book/{id}/delete', [BookController::class, 'destroy'])->name('book.destroy');
Route::PUT('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

//Peminjam
Route::get('/peminjam', [PeminjamController::class, 'index'])->name('peminjam.index');
Route::post('/peminjam/store', [PeminjamController::class, 'store'])->name('peminjam.store');
Route::get('/peminjam/{id}/edit', [PeminjamController::class, 'edit'])->name('peminjam.edit');
Route::DELETE('/peminjam/{id}/delete', [PeminjamController::class, 'destroy'])->name('peminjam.destroy');
Route::PUT('/peminjam/update/{id}', [PeminjamController::class, 'update'])->name('peminjam.update');
Route::get('/peminjam/create', [PeminjamController::class, 'create'])->name('peminjam.create');

//Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::DELETE('/pegawai/{id}/delete', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::PUT('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

//RakBuku
Route::get('/rakbuku', [RakbukuController::class, 'index'])->name('rakbuku.index');
Route::post('/rakbuku/store', [RakbukuController::class, 'store'])->name('rakbuku.store');
Route::get('/rakbuku/{id}/edit', [RakbukuController::class, 'edit'])->name('rakbuku.edit');
Route::DELETE('/rakbuku/{id}/delete', [RakbukuController::class, 'destroy'])->name('rakbuku.destroy');
Route::PUT('/rakbuku/update/{id}', [RakbukuController::class, 'update'])->name('rakbuku.update');
Route::get('/rakbuku/create', [RakbukuController::class, 'create'])->name('rakbuku.create');