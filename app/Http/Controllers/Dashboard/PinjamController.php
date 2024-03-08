<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\PinjamExport;
use App\Http\Controllers\Controller;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
                'active' => 'peminjaman',
                'pinjam' => $pinjam,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        $pinjam -> load('user', 'buku');
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
    public function update(Request $request, Pinjam $pinjam)
    {
        if ($request->status === 'pinjam') {
            $pinjam->update([
                'status' => $request->status,
            ]);

        } else if ($request->status === 'kembali') {
            $pinjam->update([
                'tanggal_kembali' => now(),
                'status' => $request->status,
            ]);
        }

        toast('Peminjaman berhasil diupdate!', 'success');

        return redirect('dashboard/peminjaman');
    }

    public function export()
    {
        return Excel::download(new PinjamExport, 'Data Peminjaman.xlsx');
    }
}
