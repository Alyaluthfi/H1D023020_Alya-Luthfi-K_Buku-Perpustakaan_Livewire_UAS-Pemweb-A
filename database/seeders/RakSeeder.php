<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rak;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raks = [
            ['kode_rak' => 'RAK-A1', 'lokasi' => 'Lantai 1 - Fiksi'],
            ['kode_rak' => 'RAK-A2', 'lokasi' => 'Lantai 1 - Ilmu Pengetahuan'],
            ['kode_rak' => 'RAK-B1', 'lokasi' => 'Lantai 2 - Biografi'],
            ['kode_rak' => 'RAK-B2', 'lokasi' => 'Lantai 2 - Sejarah'],
            ['kode_rak' => 'RAK-C1', 'lokasi' => 'Lantai 3 - Ilmu Agama'],
            ['kode_rak' => 'RAK-C2', 'lokasi' => 'Lantai 3 - Teknologi'],
            ['kode_rak' => 'RAK-D1', 'lokasi' => 'Lantai 4 - Psikologi'],
            ['kode_rak' => 'RAK-D2', 'lokasi' => 'Lantai 4 - Kesehatan'],
            ['kode_rak' => 'RAK-E1', 'lokasi' => 'Lantai 5 - Bahasa'],
            ['kode_rak' => 'RAK-E2', 'lokasi' => 'Lantai 5 - seni & Budaya'],
        ];

        foreach ($raks as $rak) {
            Rak::create($rak);
        }
    }
}
