<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }

    public function detail()
    {
        return $this->belongsTo(detailPinjam::class, 'pinjam_id');
    }
}
