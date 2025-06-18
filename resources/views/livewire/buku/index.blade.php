<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

    <input type="text" wire:model="search" placeholder="Cari judul / penulis..."
           class="border rounded px-3 py-2 mb-4 w-full" />

    <a href="{{ route('buku.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Buku
    </a>

    <table class="table-auto w-full border">
        <thead class="bg-pink-100">
            <tr>
                <th class="border px-4 py-2">Judul</th>
                <th class="border px-4 py-2">Penulis</th>
                <th class="border px-4 py-2">Tahun</th>
                <th class="border px-4 py-2">Kategori</th>
                <th class="border px-4 py-2">Rak</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bukus as $buku)
                <tr>
                    <td class="border px-4 py-2">{{ $buku->judul }}</td>
                    <td class="border px-4 py-2">{{ $buku->penulis }}</td>
                    <td class="border px-4 py-2">{{ $buku->tahun_terbit }}</td>
                    <td class="border px-4 py-2">{{ $buku->kategori->nama_kategori ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $buku->rak->kode_rak ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="border px-4 py-2 text-center text-gray-500">Data tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
