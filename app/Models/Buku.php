<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus'; // pastikan sama dengan nama tabel di migration

    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'kategori_id',
        'rak_id',
    ];

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Relasi ke Rak
    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }
}
