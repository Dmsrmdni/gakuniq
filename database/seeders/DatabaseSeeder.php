<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kategori;
use App\Models\Sub_kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        Kategori::create([
            'name' => 'PRIA',
            'link' => '/kategori/pria',
            'hover' => '<HoverCategoryPria />'
        ]);

        Kategori::create([
            'name' => 'WANITA',
            'link' => '/kategori/wanita',
            'hover' => '<HoverCategoryWanita />'
        ]);

        Sub_kategori::create([
            'kategori_id' => 1,
            'sub_kategori' => 'Modern Pria',
        ]);

        Sub_kategori::create([
            'kategori_id' => 2,
            'sub_kategori' => 'Modern Wanita',
        ]);

        // Sub_kategori::create([
        //     'kategori_id' => 2,
        //     'sub_kategori' => 'celana',
        // ]);

        \App\Models\Produk::factory(5)->create();

    }
}
