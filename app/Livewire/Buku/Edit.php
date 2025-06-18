<?php

namespace App\Livewire\Buku;

use Livewire\Component;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Rak;

class Edit extends Component
{
    public $buku;
    public $judul, $penulis, $tahun_terbit, $kategori_id, $rak_id;

    public function mount($id)
    {
        $this->buku = Buku::findOrFail($id);
        $this->judul = $this->buku->judul;
        $this->penulis = $this->buku->penulis;
        $this->tahun_terbit = $this->buku->tahun_terbit;
        $this->kategori_id = $this->buku->kategori_id;
        $this->rak_id = $this->buku->rak_id;
    }
    public function update()
    {
        $this->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required|numeric',
            'kategori_id' => 'required',
            'rak_id' => 'required',
        ]);

        $this->buku->update([
            'judul' => $this->judul,
            'penulis' => $this->penulis,
            'tahun_terbit' => $this->tahun_terbit,
            'kategori_id' => $this->kategori_id,
            'rak_id' => $this->rak_id,
        ]);

        session()->flash('message', 'Data buku berhasil diperbarui.');
        return redirect()->route('buku.index');
    }
    public function render()
    {
        return view('livewire.buku.edit',[
            'kategoris' => Kategori::all(),
            'raks' => Rak::all(), 
            ])->layout('layouts.app');
    }
}
