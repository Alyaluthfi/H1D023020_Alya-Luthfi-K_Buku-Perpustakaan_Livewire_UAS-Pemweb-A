<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-6">📚 Tambah Buku</h2>

    <form wire:submit.prevent="save" class="space-y-4 bg-white p-6 rounded-xl shadow border border-pink-200">
        <input type="text" wire:model="judul" placeholder="Judul Buku"
            class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none" />

        <input type="text" wire:model="penulis" placeholder="Penulis"
            class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none" />

        <input type="number" wire:model="tahun_terbit" placeholder="Tahun Terbit"
            class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none" />

        <select wire:model="kategori_id"
            class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>

        <select wire:model="rak_id"
            class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
            <option value="">-- Pilih Rak --</option>
            @foreach($raks as $rak)
                <option value="{{ $rak->id }}">{{ $rak->kode_rak }} - {{ $rak->lokasi }}</option>
            @endforeach
        </select>

        <button type="submit"
            class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded shadow transition">
            💾 Simpan
        </button>
    </form>
</div>
