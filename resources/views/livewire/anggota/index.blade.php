<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-4">👤 Daftar Anggota</h2>

    @if (session()->has('message'))
        <div class="bg-pink-100 border border-pink-300 text-pink-700 p-3 rounded mb-4 shadow">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('anggota.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded shadow mb-6 inline-block transition">
        + Tambah Anggota
    </a>

    <div class="overflow-x-auto">
        <table class="w-full text-left border border-pink-200 shadow rounded-lg bg-white">
            <thead>
                <tr class="bg-pink-100 text-pink-800">
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">NIM</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">No HP</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anggotas as $anggota)
                <tr class="border-t border-pink-100 hover:bg-pink-50 transition">
                    <td class="px-4 py-2">{{ $anggota->nama }}</td>
                    <td class="px-4 py-2">{{ $anggota->nim }}</td>
                    <td class="px-4 py-2">{{ $anggota->alamat }}</td>
                    <td class="px-4 py-2">{{ $anggota->no_hp }}</td>
                    <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow">
                        ✏️ Edit
                    </a>
                    <button wire:click="delete({{ $anggota->id }})" onclick="return confirm('Yakin ingin menghapus anggota ini?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                       🗑️ Hapus
                    </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
