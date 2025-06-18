<div class="p-4">
    <h2 class="text-2xl font-bold mb-2">Data Peminjaman</h2>

    <p class="text-sm text-gray-600 mb-4">Total buku yang sedang dipinjam: <strong>{{ $totalDipinjam }}</strong></p>

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('peminjaman.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Peminjaman</a>

    <table class="w-full table-auto border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Anggota</th>
                <th class="px-4 py-2">Judul Buku</th>
                <th class="px-4 py-2">Tanggal Pinjam</th>
                <th class="px-4 py-2">Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjamans as $peminjaman)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $peminjaman->anggota->nama }}</td>
                <td class="px-4 py-2">{{ $peminjaman->buku->judul }}</td>
                <td class="px-4 py-2">{{ $peminjaman->tanggal_pinjam }}</td>
                <td class="px-4 py-2">{{ $peminjaman->tanggal_kembali }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>