<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-6">➕ Tambah Peminjaman</h2>

    @if ($flashMessage)
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded shadow mb-4">
            {{ $flashMessage }}
        </div>
    @endif

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded shadow mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-5 bg-white p-6 rounded-xl shadow border border-pink-200">
        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Pilih Anggota</label>
            <select wire:model="anggota_id"
                class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggotas as $anggota)
                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                @endforeach
            </select>
            @error('anggota_id') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Pilih Buku</label>
            <select wire:model="buku_id"
                class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
                <option value="">-- Pilih Buku --</option>
                @foreach ($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
            @error('buku_id') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Tanggal Pinjam</label>
            <input type="date" wire:model="tanggal_pinjam"
                class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none" />
            @error('tanggal_pinjam') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Tanggal Kembali <span class="text-gray-500"></span></label>
            <input type="date" wire:model="tanggal_kembali"
                class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none" />
            @error('tanggal_kembali') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="pt-2">
            <button type="submit"
                class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded shadow transition">
                💾 Simpan
            </button>
        </div>
    </form>
</div>
