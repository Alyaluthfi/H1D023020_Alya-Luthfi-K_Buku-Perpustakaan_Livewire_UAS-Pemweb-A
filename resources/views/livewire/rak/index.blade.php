<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-6">📦 Daftar Lokasi Rak Buku</h2>

    <div class="bg-white p-4 rounded-xl shadow border border-pink-200">
        <table class="w-full table-auto border-collapse">
            <thead class="bg-pink-100 text-pink-700">
                <tr>
                    <th class="px-4 py-3 border border-pink-200 text-left">Kode Rak</th>
                    <th class="px-4 py-3 border border-pink-200 text-left">Lokasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($raks as $rak)
                    <tr class="hover:bg-pink-50">
                        <td class="px-4 py-2 border border-pink-100 text-gray-700">{{ $rak->kode_rak }}</td>
                        <td class="px-4 py-2 border border-pink-100 text-gray-700">{{ $rak->lokasi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
