<div class="p-4 bg-pink-50 min-h-screen">
    <h2 class="text-xl font-bold text-pink-700 mb-4">✏️ Edit Anggota</h2>

    <form wire:submit.prevent="update" class="space-y-4 bg-white p-6 rounded shadow border border-pink-200">
        <input type="text" wire:model="nama" placeholder="Nama"
            class="w-full border border-pink-300 focus:ring focus:ring-pink-200 px-4 py-2 rounded" />

        <input type="text" wire:model="nim" placeholder="NIM"
            class="w-full border border-pink-300 focus:ring focus:ring-pink-200 px-4 py-2 rounded" />

        <textarea wire:model="alamat" placeholder="Alamat"
            class="w-full border border-pink-300 focus:ring focus:ring-pink-200 px-4 py-2 rounded"></textarea>

        <input type="text" wire:model="no_hp" placeholder="No HP"
            class="w-full border border-pink-300 focus:ring focus:ring-pink-200 px-4 py-2 rounded" />

        <button type="submit"
            class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded shadow transition">
            Update
        </button>
    </form>
</div>
