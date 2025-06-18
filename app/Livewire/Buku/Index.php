<?php

namespace App\Livewire\Buku;

use Livewire\Component;
use App\Models\Buku;

class Index extends Component
{
    public $search = '';

    public function render()
    {
        $bukus = Buku::with(['kategori', 'rak'])
            ->when($this->search, function ($query) {
                $query->where('judul', 'like', '%'.$this->search.'%')
                      ->orWhere('penulis', 'like', '%'.$this->search.'%');
            })
            ->get();

        return view('livewire.buku.index', [
            'bukus' => $bukus
        ])->layout('layouts.app');
    }
}
