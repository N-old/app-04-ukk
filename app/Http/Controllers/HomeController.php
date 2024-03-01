<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::paginate(3);

        return view('home')
            ->with([
                'title' => 'Home',
                'kategori' => $kategori,
            ]);
    }
}
