<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Data Rak</h2>
    <ul class="list-disc pl-5">
        @foreach ($raks as $rak)
            <li>{{ $rak->kode_rak }} - {{ $rak->lokasi }}</li>
        @endforeach
    </ul>
</div>
