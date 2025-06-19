<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Fiksi',
            'Ilmu Pengetahuan',
            'Biografi',
            'Sejarah',
            'Ilmu Agama',
            'Teknologi',
            'Psikologi',
            'Kesehatan',
            'Bahasa',
            'Seni & Budaya',
        ];

        foreach ($data as $nama) {
            Kategori::create(['nama_kategori' => $nama]);
        }
    }
}