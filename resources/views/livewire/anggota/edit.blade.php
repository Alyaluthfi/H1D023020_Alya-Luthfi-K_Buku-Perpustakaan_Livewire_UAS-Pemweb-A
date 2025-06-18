<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Edit Anggota</h2>

    <form wire:submit.prevent="update" class="space-y-4">
        <input type="text" wire:model="nama" placeholder="Nama" class="w-full border px-4 py-2 rounded">
        <input type="text" wire:model="nim" placeholder="NIM" class="w-full border px-4 py-2 rounded">
        <textarea wire:model="alamat" placeholder="Alamat" class="w-full border px-4 py-2 rounded"></textarea>
        <input type="text" wire:model="no_hp" placeholder="No HP" class="w-full border px-4 py-2 rounded">

        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>