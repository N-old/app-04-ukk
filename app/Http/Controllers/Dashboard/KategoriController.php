<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::orderBy('name')
            ->get();

        confirmDelete('Hapus Kategori?', 'Anda yakin ingin menghapus Kategori?');

        return view('dashboard.kategori.index')
            ->with([
                'title' => 'Kategori Buku',
                'active' => 'kategori',
                'kategori' => $kategori
            ]);
    }

    public function create()
    {
        return view('dashboard.kategori.create')
            ->with([
                'title' => 'Tambah Kategori',
                'active' => 'kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $kategori = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
        ];

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('icon');
            $gambar = $slug. '.' . $file->extension();
            $file->move(public_path('storage/kategori'), $gambar);
            $kategori['icon'] = '/storage/kategori/' . $gambar;
        }

        try {
            Kategori::create($kategori);

            toast('Kategori berhasil ditambahkan!', 'success');
        } catch (\Throwable $th) {
            toast('Kategori gagal ditambahkan.', 'error');
        }

        return redirect()->back();
    }

    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit')
            ->with([
                'title' => 'Edit Kategori',
                'active' => 'kategori',
                'kategori' => $kategori
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $updateKategori = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
        ];

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => ['file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('icon');
            $gambar = $slug. '.' . $file->extension();

            if ($kategori->gambar !== '/images/kategori.png') {
                File::delete(public_path($kategori->gambar));
            }

            $file->move(public_path('storage/kategori'), $gambar);
            $updateKategori['icon'] = '/storage/kategori/' . $gambar;
        }

        try {
            // dd($updateBuku);
            $kategori->update($updateKategori);
            toast('Kategori berhasil diubah!', 'success');
            return redirect()->route('kategori.index');
        } catch (\Throwable $th) {
            // dd('gagal');
            toast('Kategori gagal diubah.', 'error');
            return redirect()->back()->with('errors', 'Gagal mengubah data Kategori')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        toast('Kategori berhasil dihapus!', 'success');

        return redirect()->back();
    }
}
