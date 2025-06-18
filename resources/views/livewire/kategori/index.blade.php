<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Data Kategori</h2>
    <ul class="list-disc pl-5">
        @foreach ($kategoriList as $kategori)
            <li>{{ $kategori->nama_kategori }}</li>
        @endforeach
    </ul>
</div>