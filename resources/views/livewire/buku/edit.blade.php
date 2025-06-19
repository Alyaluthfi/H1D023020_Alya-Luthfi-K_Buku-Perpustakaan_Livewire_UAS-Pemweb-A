<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-6">✏️ Edit Buku</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded shadow mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-5 bg-white p-6 rounded-xl shadow border border-pink-200">
        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Judul</label>
            <input type="text" wire:model="judul"
                class="w-full border border-pink-300 px-4 py-2 rounded focus:ring-pink-400 focus:border-pink-500 focus:outline-none" />
            @error('judul') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Penulis</label>
            <input type="text" wire:model="penulis"
                class="w-full border border-pink-300 px-4 py-2 rounded focus:ring-pink-400 focus:border-pink-500 focus:outline-none" />
            @error('penulis') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Tahun Terbit</label>
            <input type="number" wire:model="tahun_terbit"
                class="w-full border border-pink-300 px-4 py-2 rounded focus:ring-pink-400 focus:border-pink-500 focus:outline-none" />
            @error('tahun_terbit') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Kategori</label>
            <select wire:model="kategori_id"
                class="w-full border border-pink-300 px-4 py-2 rounded focus:ring-pink-400 focus:border-pink-500 focus:outline-none">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
            @error('kategori_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Rak</label>
            <select wire:model="rak_id"
                class="w-full border border-pink-300 px-4 py-2 rounded focus:ring-pink-400 focus:border-pink-500 focus:outline-none">
                <option value="">-- Pilih Rak --</option>
                @foreach($raks as $rak)
                    <option value="{{ $rak->id }}">{{ $rak->kode_rak }} - {{ $rak->lokasi }}</option>
                @endforeach
            </select>
            @error('rak_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="pt-4">
            <button type="submit"
                class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded shadow transition">
                💾 Simpan Perubahan
            </button>
        </div>
    </form>
</div>
