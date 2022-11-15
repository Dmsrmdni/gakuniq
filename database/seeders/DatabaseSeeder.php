<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\KategoriSeeder;
use Database\Seeders\ProdukSeeder;
use Database\Seeders\SubKategoriSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VoucherSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Produk::factory(5)->create();

        $this->call([
            KategoriSeeder::class,
            SubKategoriSeeder::class,
            ProdukSeeder::class,
            UserSeeder::class,
            VoucherSeeder::class,
        ]);

    }
}
