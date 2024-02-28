<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Koleksi;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert ([
            [
                'name' => $name = 'admin',
                'slug' => $slug = Str::slug($name),
                'email' => 'admin@localhost',
                'password' => bcrypt('123123'),
                'role' => 'admin',
                'avatar' => '/images/avatar/' . $slug . '.jpg',
                'alamat' => 'alamat 1',
                'telepon' => 'telepon 1',
                'jk' => 'laki-laki',
            ],
            [
                'name' => $name = 'user',
                'slug' => $slug = Str::slug($name),
                'email' => 'user@localhost',
                'password' => bcrypt('123123'),
                'role' => 'user',
                'avatar' => '/images/avatar/' . $slug . '.jpg',
                'alamat' => 'alamat 1',
                'telepon' => 'telepon 1',
                'jk' => 'laki-laki',
            ],
            [
                'name' => $name = 'petugas',
                'slug' => $slug = Str::slug($name),
                'email' => 'petugas@localhost',
                'password' => bcrypt('123123'),
                'role' => 'petugas',
                'avatar' => '/images/avatar/' . $slug . '.jpg',
                'alamat' => 'alamat 1',
                'telepon' => 'telepon 1',
                'jk' => 'laki-laki',
            ]
        ]);

        // Koleksi::insert ([
        //     [
        //         'buku_id' => 1,
        //         'user_id' => 1,
        //     ],
        //     [
        //         'buku_id' => 2,
        //         'user_id' => 2,
        //     ],
        //     [
        //         'buku_id' => 3,
        //         'user_id' => 3,
        //     ],
        //     [
        //         'buku_id' => 4,
        //         'user_id' => 4,
        //     ],
        //     [
        //         'buku_id' => 5,
        //         'user_id' => 5,
        //     ],
        // ]);

        // Ulasan::insert ([
        //     [
        //         'buku_id' => 1,
        //         'user_id' => 1,
        //         'komentar' => 'Ulasan 1',
        //         'rating' => 5,
        //     ],
        //     [
        //         'buku_id' => 2,
        //         'user_id' => 2,
        //         'komentar' => 'Ulasan 2',
        //         'rating' => 4,
        //     ],
        //     [
        //         'buku_id' => 3,
        //         'user_id' => 3,
        //         'komentar' => 'Ulasan 3',
        //         'rating' => 3,
        //     ],
        //     [
        //         'buku_id' => 4,
        //         'user_id' => 4,
        //         'komentar' => 'Ulasan 4',
        //         'rating' => 2,
        //     ],
        //     [
        //         'buku_id' => 5,
        //         'user_id' => 5,
        //         'komentar' => 'Ulasan 5',
        //         'rating' => 1,
        //     ],
        // ]);

        $this->call(KategoriSeeder::class);
        $this->call(BukuSeeder::class);
        // $this->call(UlasanSeeder::class);
        // $this->call(KoleksiSeeder::class);
        // $this->call(PinjamSeeder::class);
    }
}
