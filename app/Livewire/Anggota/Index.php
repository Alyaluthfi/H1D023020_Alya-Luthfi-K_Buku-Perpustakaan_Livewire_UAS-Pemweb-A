<?php

namespace App\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')] // <- Ini penting agar pakai layout yang kamu punya
class Index extends Component
{
    public function render()
    {
        return view('livewire.anggota.index', [
            'anggotas' => Anggota::all(),
        ]);
    }
       public function delete($id)
    {
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->delete();

        session()->flash('message', 'Data anggota berhasil dihapus.');
    }
}
