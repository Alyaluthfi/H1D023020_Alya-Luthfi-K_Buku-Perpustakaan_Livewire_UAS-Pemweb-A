<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-4">📚 Daftar Kategori Buku</h2>

    <ul class="list-disc pl-6 bg-white border border-pink-200 p-4 rounded-xl shadow space-y-2">
        @foreach ($kategoriList as $kategori)
            <li class="text-pink-600 font-medium">{{ $kategori->nama_kategori }}</li>
        @endforeach
    </ul>
</div>
