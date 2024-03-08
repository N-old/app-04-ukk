<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PinjamanController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
            'user' => ['required', 'string'],
            'buku' => ['required'],
        ]);

        $user = User::where('id', $request->input('user'))->first();

        try {
            $request = Pinjam::create([
                'slug' => Str::uuid(),
                'user_id' => $user->id,
                'buku_id' => $request->input('buku'),
                'tanggal_pinjam' => now(),
                'tenggat' => now()->addWeeks(2),
            ]);

            toast('Peminjaman berhasil dibuat!', 'success');

        } catch (\Throwable $th) {
            toast('Peminjaman gagal dibuat!', 'error');
        }
        return redirect()->back();
    }
}
