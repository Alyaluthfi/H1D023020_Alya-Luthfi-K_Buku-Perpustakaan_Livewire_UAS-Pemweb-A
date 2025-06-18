<?php

namespace App\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;

class Create extends Component
{
    public $nama, $nim, $alamat, $no_hp;

    public function save()
    {
        $this->validate([
            'nama' => 'required',
            'nim' => 'required|unique:anggotas,nim',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Anggota::create([
            'nama' => $this->nama,
            'nim' => $this->nim,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
        ]);

        session()->flash('message', 'Data anggota berhasil ditambahkan.');
        return redirect()->route('anggota.index');
    }
    public function render()
    {
        return view('livewire.anggota.create', [
            ])->layout('layouts.app');
    }
}
