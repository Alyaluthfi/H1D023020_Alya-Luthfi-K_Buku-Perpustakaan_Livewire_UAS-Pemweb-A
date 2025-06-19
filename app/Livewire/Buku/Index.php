<?php

namespace App\Livewire\Buku;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Buku;

#[Layout('layouts.app')]
class Index extends Component
{
    use WithPagination;
    public string $search = ''; 

    public function updatingSearch()
    {
        $this->resetPage();
    }

     public function render()
    {
        $bukus = Buku::with(['kategori', 'rak'])
            ->where(function ($query) {
                $query->where('judul', 'like', '%' . $this->search . '%')
                      ->orWhere('penulis', 'like', '%' . $this->search . '%');
            })
            ->paginate(5); // Ganti jumlah per halaman sesuai kebutuhan

        return view('livewire.buku.index', [
            'bukus' => $bukus
        ])->layout('layouts.app');
    }

        public function delete($id)
    {
        \App\Models\Buku::findOrFail($id)->delete();
        session()->flash('message', 'Data buku berhasil dihapus.');
    }

}
