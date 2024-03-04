<?php

namespace App\Http\Controllers;

use App\Models\detailPinjam;
use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PinjamanController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
            'user' => ['required', 'string', 'max:255'],
            'buku' => ['required'],
            // 'status' => ['required', 'string', 'max:255'],
            // 'tanggal_pinjam' => ['required', 'date'],
            // 'tanggal_kembali' => ['required', 'date']
        ]);

        $user = User::where('id', $request->input('user'))->first();

        try {
            $pinjam = Pinjam::create([
                'user_id' => $user->id,
                // 'status' => $request->input('status'),
                'buku_id' => $request->input('buku'),
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addWeeks(2),
            ]);

            // dd($pinjam);

            // foreach ($request->buku as $buku) {
            //     detailPinjam::create([
            //         'pinjam_id' => $pinjam->id,
            //         'buku_id' => $buku,
            //     ]);
            // }

            toast('Peminjaman berhasil dibuat!', 'success');

        } catch (\Throwable $th) {
            // dd($th);
            toast('Peminjaman gagal dibuat!', 'error');
        }
        
        return redirect()->back();
    }
}
