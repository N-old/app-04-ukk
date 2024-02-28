<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::insert ([
            [
                'name' => $name = 'Komik 1',
                'slug' => $slug = Str::slug($name),
                'penulis' => 'Penulis 1',
                'penerbit' => 'Penerbit 1',
                'tahun' => '2022',
                'stok' => 10,
                'deskripsi' => 'deskripsi 1',
                'kategori_id' => 1,
                'cover' => '/images/cover/' . $slug . '.jpg',
            ],
            [
                'name' => $name = 'Komik 2',
                'slug' => $slug = Str::slug($name),
                'penulis' => 'Penulis 2',
                'penerbit' => 'Penerbit 2',
                'tahun' => '2022',
                'stok' => 10,
                'deskripsi' => 'deskripsi 2',
                'kategori_id' => 2,
                'cover' => '/images/cover/' . $slug . '.jpg',
            ],
            [
                'name' => $name = 'Komik 3',
                'slug' => $slug = Str::slug($name),
                'penulis' => 'Penulis 3',
                'penerbit' => 'Penerbit 3',
                'tahun' => '2022',
                'stok' => 10,
                'deskripsi' => 'deskripsi 3',
                'kategori_id' => 3,
                'cover' => '/images/cover/' . $slug . '.jpg',
            ],
            [
                'name' => $name = 'Komik 4',
                'slug' => $slug = Str::slug($name),
                'penulis' => 'Penulis 4',
                'penerbit' => 'Penerbit 4',
                'tahun' => '2022',
                'stok' => 10,
                'deskripsi' => 'deskripsi 4',
                'kategori_id' => 4,
                'cover' => '/images/cover/' . $slug . '.jpg',
            ],
            [
                'name' => $name = 'Komik 5',
                'slug' => $slug = Str::slug($name),
                'penulis' => 'Penulis 5',
                'penerbit' => 'Penerbit 5',
                'tahun' => '2022',
                'stok' => 10,
                'deskripsi' => 'deskripsi 5',
                'kategori_id' => 5,
                'cover' => '/images/cover/' . $slug . '.jpg',
            ]
        ]);
    }
}
