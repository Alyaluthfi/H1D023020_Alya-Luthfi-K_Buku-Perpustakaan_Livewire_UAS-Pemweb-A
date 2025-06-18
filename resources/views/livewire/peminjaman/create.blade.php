<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Tambah Peminjaman</h2>

    <form wire:submit.prevent="save" class="space-y-4">
        <select wire:model="anggota_id" class="w-full border px-4 py-2 rounded">
            <option value="">-- Pilih Anggota --</option>
            @foreach ($anggotas as $anggota)
                <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
            @endforeach
        </select>

        <select wire:model="buku_id" class="w-full border px-4 py-2 rounded">
            <option value="">-- Pilih Buku --</option>
            @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
            @endforeach
        </select>

        <input type="date" wire:model="tanggal_pinjam" class="w-full border px-4 py-2 rounded">
        <input type="date" wire:model="tanggal_kembali" class="w-full border px-4 py-2 rounded">

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>