<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\BukuExport;
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Kategori;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::with('kategori')
            ->orderBy('name')
            ->get();

        confirmDelete('Hapus Buku?', 'Apakah anda ingin menghapus buku?');

        return view('dashboard.buku.index')
            ->with([
                'title' => 'Data Buku',
                'active' => 'buku',
                'buku' => $buku,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::orderBy('name')
            ->get();

        return view('dashboard.buku.create')
            ->with([
                'title' => 'Tambah Data Buku',
                'active' => 'buku',
                'kategori' => $kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'penulis' => ['required', 'string', 'max:255'],
            'penerbit' => ['required', 'string', 'max:255'],
            'tahun' => ['required', 'integer'],
            'stok' => ['required', 'integer'],
            'deskripsi' => ['required', 'string'],
            'cover' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            'kategori' => ['required', 'integer'],
        ]);

        $buku = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun' => $request->input('tahun'),
            'stok' => $request->input('stok'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori'),
        ];

        if ($request->hasFile('cover')) {
            $request->validate([
                'cover' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('cover');
            $gambar = $slug. '.' . $file->extension();
            $file->move(public_path('storage/buku'), $gambar);
            $buku['cover'] = '/storage/buku/' . $gambar;
        }

        try {
            Buku::create($buku);

            toast('Buku berhasil ditambahkan!', 'success');
        } catch (\Throwable $th) {
            toast('Buku gagal ditambahkan.', 'error');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $buku->load(['kategori']);

        confirmDelete('Hapus Buku?', 'Anda yakin ingin menghapus buku?');

        return view('dashboard.buku.show')
            ->with([
                'title' => 'Detail Buku',
                'active' => 'buku',
                'buku' => $buku,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $kategori = Kategori::orderBy('name')
            ->get();

        return view('dashboard.buku.edit')
            ->with([
                'title' => 'Edit Buku',
                'active' => 'buku',
                'buku' => $buku,
                'kategori' => $kategori,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'penulis' => ['required', 'string', 'max:255'],
            'penerbit' => ['required', 'string', 'max:255'],
            'tahun' => ['required', 'integer'],
            'stok' => ['required', 'integer'],
            'deskripsi' => ['nullable', 'string'],
            'kategori' => ['required', 'integer'],
        ]);

        $updateBuku = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun' => $request->input('tahun'),
            'stok' => $request->input('stok'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori'),
        ];

        if ($request->hasFile('cover')) {
            $request->validate([
                'cover' => ['file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('cover');
            $gambar = $slug. '.' . $file->extension();

            if ($buku->gambar !== '/images/buku.png') {
                File::delete(public_path($buku->gambar));
            }

            $file->move(public_path('storage/buku'), $gambar);
            $updateBuku['cover'] = '/storage/buku/' . $gambar;
        }

        try {
            // dd($updateBuku);
            $buku->update($updateBuku);
            toast('Buku berhasil diubah!', 'success');
            return redirect()->route('buku.index');
        } catch (\Throwable $th) {
            // dd('gagal');
            toast('Buku gagal diubah.', 'error');
            return redirect()->back()->with('errors', 'Gagal mengubah data buku')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        if ($buku->gambar !== '/images/buku.png') {
            File::delete(public_path($buku->gambar));
        }

        $buku->delete();

        toast('Buku berhasil dihapus!', 'success');
        return redirect()->route('buku.index');
    }

    public function export(){
        return Excel::download(new BukuExport, 'buku.xlsx');
    }
}
