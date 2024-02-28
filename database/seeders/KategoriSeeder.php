<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::insert ([
            [
                'name' => $name = 'Komik',
                'slug' => $slug = Str::slug($name),
                'icon' => '/images/icon/' . $slug . '.png',
            ],
            [
                'name' => $name = 'Novel',
                'slug' => $slug = Str::slug($name),
                'icon' => '/images/icon/' . $slug . '.png',
            ],
            [
                'name' => $name = 'Cerpen',
                'slug' => $slug = Str::slug($name),
                'icon' => '/images/icon/' . $slug . '.png',
            ],
            [
                'name' => $name = 'Ensiklopedia',
                'slug' => $slug = Str::slug($name),
                'icon' => '/images/icon/' . $slug . '.png',
            ],
            [
                'name' => $name = 'Biografi',
                'slug' => $slug = Str::slug($name),
                'icon' => '/images/icon/' . $slug . '.png',
            ],
        ]);
    }
}
