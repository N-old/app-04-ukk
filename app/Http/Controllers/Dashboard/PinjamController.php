<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pinjam;
use App\Http\Requests\UpdatePinjamRequest;
use App\Models\Buku;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjam = Pinjam::with('user')
            ->orderBy('user_id')
            ->get();

        confirmDelete('Hapus Peminjaman?', 'Apakah anda ingin menghapus peminjaman?');

        return view('dashboard.pinjam.index')
            ->with([
                'title' => 'Data Peminjaman',
                'active' => 'pinjam',
                'pinjam' => $pinjam,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        $pinjam -> load('user', 'detail', 'detail.buku', 'detail.buku.kategori');
        return view('dashboard.pinjam.show')
            ->with([
                'title' => 'Detail Peminjaman',
                'active' => 'pinjam',
                'pinjam' => $pinjam,
            ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePinjamRequest $request, Pinjam $pinjam)
    {
        if ($request->status === '1') {
            $pinjam->update([
                'tgl_pinjam' => now(),
                'tenggat' => now()->addDays(14),
                'status' => $request->status,
            ]);

            foreach ($pinjam->detail as $detail) {
                $buku = Buku::find($detail->buku_id);
                if ($buku) {
                    $buku->pinjam += $detail->jumlah;
                    $buku->save();
                }
            }
        } else if ($request->status === '2') {
            $pinjam->update([
                'tgl_kembali' => now(),
                'status' => $request->status,
            ]);

            foreach ($pinjam->detail as $detail) {
                $buku = Buku::find($detail->buku_id);
                if ($buku) {
                    $buku->pinjam -= $detail->jumlah;
                    $buku->save();
                }
            }
        }

        toast('Peminjaman berhasil diupdate!', 'success');

        return redirect()->back();
    }

}
