<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Tambah Buku</h2>

    <form wire:submit.prevent="save" class="space-y-4">
        <input type="text" wire:model="judul" placeholder="Judul" class="w-full border px-4 py-2 rounded">
        <input type="text" wire:model="penulis" placeholder="Penulis" class="w-full border px-4 py-2 rounded">
        <input type="number" wire:model="tahun_terbit" placeholder="Tahun Terbit" class="w-full border px-4 py-2 rounded">

        <select wire:model="kategori_id" class="w-full border px-4 py-2 rounded">
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>

        <select wire:model="rak_id" class="w-full border px-4 py-2 rounded">
            <option value="">-- Pilih Rak --</option>
            @foreach($raks as $rak)
                <option value="{{ $rak->id }}">{{ $rak->kode_rak }} - {{ $rak->lokasi }}</option>
            @endforeach
        </select>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>