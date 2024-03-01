<?php

namespace App\Http\Controllers;

use App\Models\DetailPinjam;
use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PinjamUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pinjam $pinjam)
    {
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            'buku_id' => ['required', 'string', 'max:255'],
            'tanggal_peminjaman'
        ]);
    }
}
