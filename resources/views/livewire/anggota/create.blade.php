<div class="p-6 bg-pink-50 min-h-screen">
    <h2 class="text-2xl font-bold text-pink-700 mb-6">➕ Tambah Anggota</h2>

    <form wire:submit.prevent="save" class="space-y-4 bg-white p-6 rounded-xl shadow border border-pink-200">
        <input type="text" wire:model="nama" placeholder="Nama" class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
        
        <input type="text" wire:model="nim" placeholder="NIM" class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">
        
        <textarea wire:model="alamat" placeholder="Alamat" class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none"></textarea>
        
        <input type="text" wire:model="no_hp" placeholder="No HP" class="w-full border border-pink-300 focus:ring-pink-400 focus:border-pink-500 px-4 py-2 rounded focus:outline-none">

        <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded transition shadow">
            💾 Simpan
        </button>
    </form>
</div>
