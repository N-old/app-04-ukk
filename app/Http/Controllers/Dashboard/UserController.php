<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('name')
            ->get();

        confirmDelete('Hapus User?', 'Anda yakin ingin menghapus user?');

        return view('dashboard.user.index')
            ->with([
                'title' => 'Data User',
                'active' => 'user',
                'user' => $user,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create')
            ->with([
                'title' => 'Tambah User',
                'active' => 'user',
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users,name'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::defaults()],
            'telepon' => ['required', 'string', 'max:15'],
            'role' => ['required', 'string'],
            'jk' => ['nullable', 'string',],
            'alamat' => ['nullable', 'string',],
        ]);

        $user = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'telepon' => $request->input('telepon'),
            'role' => $request->input('role'),
            'jk' => $request->input('jk'),
            'alamat' => $request->input('alamat'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('foto');
            $gambar = $slug. '.' . $file->extension();
            $file->move(public_path('storage/user'), $gambar);
            $user['foto'] = '/storage/user/' . $gambar;
        }

        try {
            User::create($user);
            toast('User berhasil ditambahkan!', 'success');
            return redirect()->route('user.index');
        } catch (\Throwable $th) {
            toast('User gagal ditambahkan!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        confirmDelete('Hapus Pengguna?', 'Anda yakin ingin menghapus pengguna?');

        return view('dashboard.user.show')
            ->with([
                'title' => 'Detail User',
                'active' => 'user',
                'user' => $user
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit')
            ->with([
                'title' => 'Edit User',
                'active' => 'user',
                'user' => $user
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', Password::defaults()],
            'telepon' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string'],
            'jk' => ['nullable', 'string',],
            'alamat' => ['nullable', 'string',],
        ]);

        $updateUser = [
            'name' => $name = $request->input('name'),
            'slug' => $slug = Str::slug($name),
            'email' => $request->input('email'),
            'password' => Hash::make    ($request->input('password')),
            'telepon' => $request->input('telepon'),
            'role' => $request->input('role'),
            'jk' => $request->input('jk'),
            'alamat' => $request->input('alamat'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => [ 'file', 'image', 'mimes:jpg,jpeg,png,svg,gif,webp'],
            ]);

            $file = $request->file('foto');
            $gambar = $slug. '.' . $file->extension();

            if ($user->foto !== '/images/user.png') {
                File::delete(public_path($user->foto));
            }

            $file->move(public_path('storage/user'), $gambar);
            $updateUser['foto'] = '/storage/user/' . $gambar;
        }

        try {
            $user->update($updateUser);
            toast('User berhasil diupdate!', 'success');
            return redirect()->route('user.index');
        } catch (\Throwable $th) {
            toast('User gagal diupdate!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->gambar !== '/images/user.png') {
            File::delete(public_path($user->gambar));
        }

        $user->delete();

        toast('User berhasil dihapus!', 'success');
        return redirect()->route('user.index');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Data Pengguna.xlsx');
    }
}
