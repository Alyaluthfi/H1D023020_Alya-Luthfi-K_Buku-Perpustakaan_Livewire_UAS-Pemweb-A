<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Daftar Anggota</h2>

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('anggota.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Anggota</a>

    <table class="w-full table-auto border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">NIM</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">No HP</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $anggota->nama }}</td>
                <td class="px-4 py-2">{{ $anggota->nim }}</td>
                <td class="px-4 py-2">{{ $anggota->alamat }}</td>
                <td class="px-4 py-2">{{ $anggota->no_hp }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>