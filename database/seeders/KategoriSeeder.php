<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'name' => 'PRIA',
            // 'link' => '/kategori/pria',
            // 'hover' => '<HoverCategoryPria />',
            // 'status' => '0',
        ]);

        Kategori::create([
            'name' => 'WANITA',
            // 'link' => '/kategori/wanita',
            // 'hover' => '<HoverCategoryWanita />',
            // 'status' => '0',
        ]);

        Kategori::create([
            'name' => 'ANAK',
            // 'link' => '/kategori/wanita',
            // 'hover' => '<HoverCategoryWanita />',
            // 'status' => '0',
        ]);

    }
}
