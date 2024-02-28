<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pinjam;
use App\Models\Buku;

class detailPinjam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class, 'pinjam_id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}
