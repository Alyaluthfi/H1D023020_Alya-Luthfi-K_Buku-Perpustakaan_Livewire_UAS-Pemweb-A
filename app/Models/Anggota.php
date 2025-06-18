<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas';

    protected $fillable = ['nama', 'nim', 'alamat', 'no_hp'];

    public function peminjamen()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
