<?php

use Illuminate\Support\Facades\Route;

// Halaman utama & dashboard
Route::view('/', 'welcome');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ✨ Import Komponen Livewire
use App\Livewire\Buku\Index as BukuIndex;
use App\Livewire\Buku\Create as BukuCreate;
use App\Livewire\Buku\Edit as BukuEdit;

use App\Livewire\Anggota\Index as AnggotaIndex;
use App\Livewire\Anggota\Create as AnggotaCreate;
use App\Livewire\Anggota\Edit as AnggotaEdit;

use App\Livewire\Peminjaman\Index as PeminjamanIndex;
use App\Livewire\Peminjaman\Create as PeminjamanCreate;
use App\Livewire\Peminjaman\Edit as PeminjamanEdit;

use App\Livewire\Kategori\Index as KategoriIndex;
use App\Livewire\Rak\Index as RakIndex;

Route::middleware(['auth'])->group(function () {
    // 📚 Buku
    Route::get('/buku', BukuIndex::class)->name('buku.index');
    Route::get('/buku/create', BukuCreate::class)->name('buku.create');
    Route::get('/buku/{id}/edit', BukuEdit::class)->name('buku.edit');

    // 👤 Anggota
    Route::get('/anggota', AnggotaIndex::class)->name('anggota.index');
    Route::get('/anggota/create', AnggotaCreate::class)->name('anggota.create');
    Route::get('/anggota/{id}/edit', AnggotaEdit::class)->name('anggota.edit');

    // 🔄 Peminjaman
    Route::get('/peminjaman', PeminjamanIndex::class)->name('peminjaman.index');
    Route::get('/peminjaman/create', PeminjamanCreate::class)->name('peminjaman.create');
    Route::get('/peminjaman/{id}/edit', PeminjamanEdit::class)->name('peminjaman.edit');

    // 🗂️ Kategori
    Route::get('/kategori', KategoriIndex::class)->name('kategori.index');

    // 📌 Rak
    Route::get('/rak', RakIndex::class)->name('rak.index');
});

require __DIR__.'/auth.php';