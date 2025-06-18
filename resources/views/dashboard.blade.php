<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Sistem Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card Buku -->
            <a href="{{ route('buku.index') }}" class="bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition">
                <h3 class="text-lg font-semibold text-blue-700">📚 Manajemen Buku</h3>
                <p class="text-sm text-gray-600 mt-2">Lihat, tambah, edit dan hapus data buku.</p>
            </a>

            <!-- Card Anggota -->
            <a href="{{ route('anggota.index') }}" class="bg-white shadow-md rounded-lg p-6 hover:bg-green-50 transition">
                <h3 class="text-lg font-semibold text-green-700">👤 Data Anggota</h3>
                <p class="text-sm text-gray-600 mt-2">Kelola data anggota perpustakaan.</p>
            </a>

            <!-- Card Peminjaman -->
            <a href="{{ route('peminjaman.index') }}" class="bg-white shadow-md rounded-lg p-6 hover:bg-yellow-50 transition">
                <h3 class="text-lg font-semibold text-yellow-700">📖 Riwayat Peminjaman</h3>
                <p class="text-sm text-gray-600 mt-2">Lihat daftar peminjaman dan pengembalian buku.</p>
            </a>

            <!-- Card Kategori -->
            <a href="{{ route('kategori.index') }}" class="bg-white shadow-md rounded-lg p-6 hover:bg-purple-50 transition">
                <h3 class="text-lg font-semibold text-purple-700">🗂️ Kategori Buku</h3>
                <p class="text-sm text-gray-600 mt-2">Kelola daftar kategori buku.</p>
            </a>

            <!-- Card Rak -->
            <a href="{{ route('rak.index') }}" class="bg-white shadow-md rounded-lg p-6 hover:bg-pink-50 transition">
                <h3 class="text-lg font-semibold text-pink-700">🏷️ Lokasi Rak</h3>
                <p class="text-sm text-gray-600 mt-2">Atur lokasi penyimpanan buku di rak.</p>
            </a>
        </div>
    </div>
</x-app-layout>
