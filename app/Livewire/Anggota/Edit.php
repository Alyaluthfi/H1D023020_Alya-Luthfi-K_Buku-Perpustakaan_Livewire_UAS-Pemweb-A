<?php

namespace App\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;

class Edit extends Component
{
     public $anggota;
    public $nama, $nim, $alamat, $no_hp;

    public function mount($id)
    {
        $this->anggota = Anggota::findOrFail($id);
        $this->nama = $this->anggota->nama;
        $this->nim = $this->anggota->nim;
        $this->alamat = $this->anggota->alamat;
        $this->no_hp = $this->anggota->no_hp;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'nim' => 'required|unique:anggotas,nim,' . $this->anggota->id,
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $this->anggota->update([
            'nama' => $this->nama,
            'nim' => $this->nim,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
        ]);

        session()->flash('message', 'Data anggota berhasil diperbarui.');
        return redirect()->route('anggota.index');
    }

    public function render()
    {
        return view('livewire.anggota.edit',[
            ])->layout('layouts.app');
    }
}
