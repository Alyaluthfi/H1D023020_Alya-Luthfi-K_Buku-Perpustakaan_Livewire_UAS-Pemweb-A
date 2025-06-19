<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-xl font-bold text-pink-700 mb-4">✏️ Edit Peminjaman</h2>

    <form wire:submit.prevent="update" class="space-y-4 bg-white p-6 rounded-lg shadow border border-pink-200">
        <div>
            <label for="anggota_id" class="block text-sm font-medium text-pink-700">Anggota</label>
            <select wire:model="anggota_id" id="anggota_id" class="w-full border rounded px-3 py-2">
                <option value="">-- Pilih Anggota --</option>
                @foreach($anggotas as $anggota)
                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="buku_id" class="block text-sm font-medium text-pink-700">Buku</label>
            <select wire:model="buku_id" id="buku_id" class="w-full border rounded px-3 py-2">
                <option value="">-- Pilih Buku --</option>
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>

        <input type="date" wire:model="tanggal_pinjam" class="w-full border px-4 py-2 rounded">
        <input type="date" wire:model="tanggal_kembali" class="w-full border px-4 py-2 rounded">

        <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
    </form>
</div>
