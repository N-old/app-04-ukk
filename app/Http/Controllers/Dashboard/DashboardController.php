<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Koleksi;
use App\Models\Pinjam;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'user') {
            $data = [
                'sumbox' => [
                    'buku' => Buku::count(),
                    'pinjam' => Pinjam::count(),
                    'ulasan' => Ulasan::count(),
                    'user' => User::where('role', 'user')->count(),
                ],
                // 'chart' => [
                //     'labels' => ['January', 'February', 'March', 'April', 'May'],
                //     'data' => [65, 59, 80, 81, 56],
                // ],
                'pinjam' => Pinjam::with('user')
                    ->latest()
                    ->limit(5)
                    ->get(),
                'buku' => Buku::with('kategori')
                    ->latest()
                    ->limit(5)
                    ->get(),
                'ulasan' => Ulasan::with(['user', 'buku'])
                    ->latest()
                    ->limit(5)
                    ->get(),
            ];
        } else {
            $data = [
                'sumbox' => [
                    'buku' => Buku::count(),
                    'pinjam' => Pinjam::count(),
                    'ulasan' => Ulasan::count(),
                ],
                'pinjam' => Pinjam::where('user_id', Auth::id())
                    ->latest()
                    ->limit(5)
                    ->get(),
                'koleksi' => Koleksi::with(['buku', 'buku.kategori'])
                    ->where('user_id', Auth::id())
                    ->latest()
                    ->limit(5)
                    ->get(),
                'buku' => Buku::with('kategori')
                    ->latest()
                    ->limit(5)
                    ->get(),
                'user' => User::where('id', Auth::id())
            ];
        }
        

        return view('dashboard.dashboard')
            ->with([
                'active' => 'dashboard',
                'title' => 'Dashboard',
                'data' => $data,
            ]);
    }
}
