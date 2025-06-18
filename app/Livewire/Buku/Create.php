<?php

namespace App\Livewire\Buku;

use Livewire\Component;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Rak;

class Create extends Component
{
    public $judul, $penulis, $tahun_terbit, $kategori_id, $rak_id;

    public function save()
    {
        $this->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required|numeric',
            'kategori_id' => 'required',
            'rak_id' => 'required',
        ]);

        Buku::create([
            'judul' => $this->judul,
            'penulis' => $this->penulis,
            'tahun_terbit' => $this->tahun_terbit,
            'kategori_id' => $this->kategori_id,
            'rak_id' => $this->rak_id,
        ]);

        session()->flash('message', 'Data buku berhasil ditambahkan.');
        return redirect()->route('buku.index');
    }
    public function render()
    {
         return view('livewire.buku.create', [
            'kategoris' => Kategori::all(),
            'raks' => Rak::all(),
        ])->layout('layouts.app'); // ⬅️ Tambahkan ini
    }
}
