<?php

namespace Database\Seeders;

use App\Models\Sub_kategori;
use Illuminate\Database\Seeder;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sub_kategori::create([
            'kategori_id' => 1,
            'sub_kategori' => 'Modern Pria',
        ]);

        Sub_kategori::create([
            'kategori_id' => 1,
            'sub_kategori' => 'Klasik Pria',
        ]);

        Sub_kategori::create([
            'kategori_id' => 1,
            'sub_kategori' => 'Retro Pria',
        ]);

        Sub_kategori::create([
            'kategori_id' => 2,
            'sub_kategori' => 'Modern Wanita',
        ]);

        Sub_kategori::create([
            'kategori_id' => 2,
            'sub_kategori' => 'Klasik Wanita',
        ]);

        Sub_kategori::create([
            'kategori_id' => 2,
            'sub_kategori' => 'Retro Wanita',
        ]);

        Sub_kategori::create([
            'kategori_id' => 3,
            'sub_kategori' => 'Modern Anak',
        ]);

        Sub_kategori::create([
            'kategori_id' => 3,
            'sub_kategori' => 'Klasik Anak',
        ]);

        Sub_kategori::create([
            'kategori_id' => 3,
            'sub_kategori' => 'Retro Anak',
        ]);

    }
}
