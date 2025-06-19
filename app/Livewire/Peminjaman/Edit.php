<?php

namespace App\Livewire\Peminjaman;

use Livewire\Component;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

class Edit extends Component
{ 
    public $peminjamanId;
    public $anggota_id, $buku_id, $tanggal_pinjam, $tanggal_kembali;
    public $anggotas, $bukus;

    public function mount($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $this->peminjamanId = $id;
        $this->anggota_id = $peminjaman->anggota_id;
        $this->buku_id = $peminjaman->buku_id;
        $this->tanggal_pinjam = $peminjaman->tanggal_pinjam;
        $this->tanggal_kembali = $peminjaman->tanggal_kembali;

        $this->anggotas = Anggota::all();
        $this->bukus = Buku::all();
    }

    public function update()
    {
        $this->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        $peminjaman = Peminjaman::find($this->peminjamanId);
        $peminjaman->update([
            'anggota_id' => $this->anggota_id,
            'buku_id' => $this->buku_id,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => $this->tanggal_kembali,
        ]);

        session()->flash('message', 'Data peminjaman berhasil diperbarui.');
        return redirect()->route('peminjaman.index');
    }

    public function render()
    {
        return view('livewire.peminjaman.edit')
        ->layout('layouts.app');
    }
}
