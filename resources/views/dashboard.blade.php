<x-app-layout>

    <div class="py-10 bg-pink-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Ucapan Selamat Datang -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-10">
                <h3 class="text-xl font-semibold text-pink-700">Halo, {{ Auth::user()->name }}! 👋</h3>
                <p class="text-gray-700 mt-2">Selamat datang di sistem manajemen perpustakaan. Silakan kelola data melalui menu berikut ini:</p>
            </div>

            <!-- Kotak Menu -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card Buku -->
                <a href="{{ route('buku.index') }}" class="bg-white border border-pink-200 shadow-sm rounded-xl p-6 hover:bg-pink-100 transition">
                    <div class="text-pink-500 text-4xl mb-2">📚</div>
                    <h3 class="text-lg font-bold text-pink-700">Manajemen Buku</h3>
                    <p class="text-sm text-gray-600 mt-1">Lihat, tambah, edit dan hapus data buku.</p>
                </a>

                <!-- Card Anggota -->
                <a href="{{ route('anggota.index') }}" class="bg-white border border-pink-200 shadow-sm rounded-xl p-6 hover:bg-pink-100 transition">
                    <div class="text-pink-500 text-4xl mb-2">👤</div>
                    <h3 class="text-lg font-bold text-pink-700">Data Anggota</h3>
                    <p class="text-sm text-gray-600 mt-1">Kelola data anggota perpustakaan.</p>
                </a>

                <!-- Card Peminjaman -->
                <a href="{{ route('peminjaman.index') }}" class="bg-white border border-pink-200 shadow-sm rounded-xl p-6 hover:bg-pink-100 transition">
                    <div class="text-pink-500 text-4xl mb-2">📖</div>
                    <h3 class="text-lg font-bold text-pink-700">Riwayat Peminjaman</h3>
                    <p class="text-sm text-gray-600 mt-1">Pantau aktivitas peminjaman dan pengembalian buku.</p>
                </a>

                <!-- Card Kategori -->
                <a href="{{ route('kategori.index') }}" class="bg-white border border-pink-200 shadow-sm rounded-xl p-6 hover:bg-pink-100 transition">
                    <div class="text-pink-500 text-4xl mb-2">🗂️</div>
                    <h3 class="text-lg font-bold text-pink-700">Kategori Buku</h3>
                    <p class="text-sm text-gray-600 mt-1">Atur jenis dan kategori koleksi buku.</p>
                </a>

                <!-- Card Rak -->
                <a href="{{ route('rak.index') }}" class="bg-white border border-pink-200 shadow-sm rounded-xl p-6 hover:bg-pink-100 transition">
                    <div class="text-pink-500 text-4xl mb-2">📦</div>
                    <h3 class="text-lg font-bold text-pink-700">Lokasi Rak</h3>
                    <p class="text-sm text-gray-600 mt-1">Kelola letak penyimpanan buku di rak-rak.</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
