<div class="p-6">
    <h2 class="text-2xl font-bold text-pink-700 mb-4">📚 Daftar Buku</h2>

    <input type="text" wire:model="search" placeholder="Cari judul / penulis..."
           class="border rounded px-3 py-2 mb-4 w-full" />
    @if ($search)
        <p class="text-sm text-gray-600 mb-2">
            Menampilkan <strong>{{ $bukus->total() }}</strong> hasil untuk "<strong>{{ $search }}</strong>"
        </p>
    @endif
    
    <a href="{{ route('buku.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded mb-4 inline-block transition">
        + Tambah Buku
    </a>

    <table class="table-auto w-full border border-pink-200 rounded overflow-hidden shadow">
        <thead class="bg-pink-100 text-pink-800">
            <tr>
                <th class="border px-4 py-2">Judul</th>
                <th class="border px-4 py-2">Penulis</th>
                <th class="border px-4 py-2">Tahun</th>
                <th class="border px-4 py-2">Kategori</th>
                <th class="border px-4 py-2">Rak</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bukus as $buku)
                <tr wire:key="buku-{{ $buku->id }}" class="hover:bg-pink-50 transition">
                    <td class="border px-4 py-2">{{ $buku->judul }}</td>
                    <td class="border px-4 py-2">{{ $buku->penulis }}</td>
                    <td class="border px-4 py-2">{{ $buku->tahun_terbit }}</td>
                    <td class="border px-4 py-2">{{ $buku->kategori->nama_kategori ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $buku->rak->kode_rak ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('buku.edit', $buku->id) }}"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow mr-2">
                            ✏️ Edit
                        </a>

                        <button wire:click="delete({{ $buku->id }})"
                                onclick="confirm('Yakin ingin menghapus buku ini?') || event.stopImmediatePropagation()"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                            🗑️ Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border px-4 py-2 text-center text-gray-500">Data tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $bukus->links() }}
    </div>
</div>
