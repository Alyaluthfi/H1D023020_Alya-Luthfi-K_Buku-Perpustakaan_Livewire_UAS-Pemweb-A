<?php

namespace App\Livewire\Peminjaman;

use Livewire\Component;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Carbon\Carbon;

class Create extends Component
{
    public $anggota_id, $buku_id, $tanggal_pinjam, $tanggal_kembali;

    public function mount()
    {
        $this->tanggal_pinjam = now()->toDateString();
    }

    public function save()
    {
        $this->validate([
            'anggota_id' => 'required|exists:anggotas,id',
            'buku_id' => 'required|exists:bukus,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
        ]);

        $jumlahPinjaman = Peminjaman::where('anggota_id', $this->anggota_id)
            ->whereMonth('tanggal_pinjam', now()->month)
            ->count();

        if ($jumlahPinjaman >= 3) {
            $this->flashMessage = 'Anggota telah meminjam 3 buku bulan ini.';
            return;
        }


        Peminjaman::create([
            'anggota_id' => $this->anggota_id,
            'buku_id' => $this->buku_id,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => $this->tanggal_kembali,
        ]);

        session()->flash('message', 'Peminjaman berhasil ditambahkan.');
        return redirect()->route('peminjaman.index');
    }

    public function render()
    {
        return view('livewire.peminjaman.create', [
            'bukus' => Buku::all(),
            'anggotas' => Anggota::all()
        ])->layout('layouts.app');
    }
    public $flashMessage = '';

}
