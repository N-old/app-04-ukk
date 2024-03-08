<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::paginate(3);

        return view('pages.home')
            ->with([
                'title' => 'Home',
                'kategori' => $kategori,
            ]);
    }
    public function about()
    {
        return view('pages.about')
            ->with([
                'title' => 'About',
            ]);
    }
}
