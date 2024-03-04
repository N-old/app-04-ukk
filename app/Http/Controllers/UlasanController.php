<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasan = Ulasan::with('buku')
                ->where('user_id', Auth::id())
                ->latest()
                ->get();

        confirmDelete('Hapus Ulasan?', 'Anda yakin ingin menghapus ulasan?');

        return view('dashboard.pinjam.index')
            ->with([
                'title' => 'Ulasan Anda',
                'active' => 'ulasan',
                'ulasan' => $ulasan,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user' => ['required', 'integer'],
            'buku' => ['required', 'integer'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'komentar' => ['required', 'string'],
        ]);

        try {
            $ulasan = Ulasan::where('user_id', Auth::id())
                ->where('buku_id', $request->input('buku'))
                ->first();

            if ($ulasan) {
                $ulasan->update([
                    'rating' => $request->input('rating'),
                    'komentar' => $request->input('komentar'),
                ]);
            } else {
                Ulasan::create([
                    'user_id' => $request->input('user'),
                    'buku_id' => $request->input('buku'),
                    'rating' => $request->input('rating'),
                    'komentar' => $request->input('komentar'),
                ]);
            }

            toast('Ulasan berhasil diposting!', 'success');
        } catch (\Throwable $th) {
            toast('Ulasan gagal diposting.', 'error');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Ulasan $ulasan)
    // {
    //     $ulasan->load(['user', 'buku']);

    //     confirmDelete('Hapus Ulasan?', 'Anda yakin ingin menghapus ulasan?');

    //     return view('dashboard.ulasan.admin.show')
    //         ->with([
    //             'title' => 'Detail Ulasan',
    //             'active' => 'ulasan',
    //             'ulasan' => $ulasan,
    //         ]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();

        toast('Ulasan berhasil dihapus.', 'success');

        return redirect()->route('ulasan.index');
    }
}
