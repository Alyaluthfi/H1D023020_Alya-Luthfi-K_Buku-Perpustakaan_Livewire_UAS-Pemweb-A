<?php

namespace App\Livewire\Peminjaman;

use Livewire\Component;
use App\Models\Peminjaman;

class Index extends Component
{
    public function render()
    {
        $totalDipinjam = Peminjaman::whereNull('tanggal_kembali')->count();

        $peminjamans = Peminjaman::with(['buku', 'anggota'])->get();

        return view('livewire.peminjaman.index', compact('peminjamans', 'totalDipinjam'))
        ->layout('layouts.app');
    }
}
