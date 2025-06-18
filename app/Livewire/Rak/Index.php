<?php

namespace App\Livewire\Rak;

use Livewire\Component;
use App\Models\Rak;

class Index extends Component
{
    public $kode_rak, $lokasi;

    public function save()
    {
        $this->validate([
            'kode_rak' => 'required|string|max:10',
            'lokasi' => 'required|string|max:255',
        ]);

        Rak::create([
            'kode_rak' => $this->kode_rak,
            'lokasi' => $this->lokasi,
        ]);

        session()->flash('message', 'Rak berhasil ditambahkan.');
        $this->reset(['kode_rak', 'lokasi']);
    }
    public function render()
    {
         return view('livewire.rak.index', [
            'raks' => Rak::all()
        ])->layout('layouts.app');;
    }
}
