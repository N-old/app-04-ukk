<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PustakaController extends Controller
{
    public function index()
    {
        $buku = Buku::with('kategori')
            ->orderBy('name')
            ->get();
        return view('book')
            ->with([
                'title' => 'Halaman Buku',
                'buku' => $buku
            ]);
    }

    public function show(Buku $buku)
    {
        $buku = Buku::with('kategori', 'ulasan')->find(1);

        // Data kategori dan ulasan sudah dimuat
        $kategori = $buku->kategori;
        $ulasan = $buku->ulasan;

        return view('book-detail')
            ->with([
                'title' => 'Halaman Detail Buku',
                'buku' => $buku,
                'kategori' => $kategori,
                'ulasan' => $ulasan
            ]);
    }
}
