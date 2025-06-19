<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-2">📖 Data Peminjaman</h2>

    <p class="text-sm text-gray-700 mb-4">
        Total buku yang sedang dipinjam:
        <strong class="text-pink-600">{{ $totalDipinjam }}</strong>
    </p>

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('peminjaman.create') }}"
       class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded mb-4 inline-block transition">
        + Tambah Peminjaman
    </a>

    <div class="overflow-x-auto bg-white rounded-xl border border-pink-200 shadow">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-pink-100 text-pink-700">
                    <th class="px-4 py-2 text-left">👤 Anggota</th>
                    <th class="px-4 py-2 text-left">📚 Judul Buku</th>
                    <th class="px-4 py-2 text-left">📅 Tanggal Pinjam</th>
                    <th class="px-4 py-2 text-left">📅 Tanggal Kembali</th>
                    <td class="px-4 py-2">
                </tr>
            </thead>
            <tbody>
            @foreach ($peminjamans as $peminjaman)
                <tr class="border-t hover:bg-pink-50">
                    <td class="px-4 py-2">{{ $peminjaman->anggota->nama }}</td>
                    <td class="px-4 py-2">{{ $peminjaman->buku->judul }}</td>
                    <td class="px-4 py-2">{{ $peminjaman->tanggal_pinjam }}</td>
                    <td class="px-4 py-2">{{ $peminjaman->tanggal_kembali }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('peminjaman.edit', $peminjaman->id) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow">
                        ✏️ Edit
                        </a>
                        <button wire:click="delete({{ $peminjaman->id }})"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow ml-2">
                            🗑️ Hapus
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>
    </div>
</div>
