<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

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
                'name' => 'admin',
                'email' => 'admin@localhost',
                'password' => bcrypt('123123'),
                'role' => 'admin',
            ],[
                'name' => 'user',
                'email' => 'user@localhost',
                'password' => bcrypt('123123'),
                'role' => 'user',
            ],[
                'name' => 'petugas',
                'email' => 'petugas@localhost',
                'password' => bcrypt('123123'),
                'role' => 'petugas',
            ]
        ]);

        $this->call(KategoriSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(KoleksiSeeder::class);
        $this->call(PinjamSeeder::class);
        $this->call(UlasanSeeder::class);
    }
}
