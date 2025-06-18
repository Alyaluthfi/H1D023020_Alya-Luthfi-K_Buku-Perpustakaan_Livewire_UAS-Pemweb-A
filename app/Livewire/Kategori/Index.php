<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class Index extends Component
{
     public $nama_kategori;

    public function save()
    {
        $this->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        Kategori::create(['nama_kategori' => $this->nama_kategori]);
        session()->flash('message', 'Kategori berhasil ditambahkan.');
        $this->reset('nama_kategori');
    }
    public function render()
    {
        return view('livewire.kategori.index', [
            'kategoriList' => Kategori::all()
        ])->layout('layouts.app');
        ;
    }
}