<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Koleksi;
use App\Models\Pinjam;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;

class PustakaController extends Controller
{
    public function index()
    {
        $pustaka = Buku::with('kategori')
            ->orderBy('name')
            ->get();
        return view('pages.book')
            ->with([
                'title' => 'Halaman Buku',
                'pustaka' => $pustaka
            ]);
    }

    public function show(Buku $buku)
    {
        $pustaka = Buku::where('id', $buku->id)
            ->with(['kategori', 'ulasan', 'ulasan.user'])
            ->withAvg('ulasan', 'rating')
            ->first();
        
        $koleksi = Koleksi::where('user_id', Auth::id())
            ->where('buku_id', $buku->id)
            ->exists();
        
        $ulasan = Ulasan::where('user_id', Auth::id())
            ->where('buku_id', $buku->id)
            ->first();

        $pinjam = Pinjam::where('user_id', Auth::id())
            ->where('buku_id', $buku->id)
            ->exists();
        
        return view('pages.book-detail')
            ->with([
                'title' => 'Halaman Detail Buku',
                'pustaka' => $pustaka,
                'koleksi' => $koleksi,
                'ulasan' => $ulasan,
                'pinjam' => $pinjam
            ]);
    }
}
