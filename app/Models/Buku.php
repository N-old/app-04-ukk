<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koleksi;
use App\Models\Pinjam;
use App\Models\Ulasan;
use App\Models\Kategori;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'buku_id');
    }

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class, 'buku_id');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'buku_id');
    }
}
