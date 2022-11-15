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
            'link' => '/kategori/pria',
            'hover' => '<HoverCategoryPria />',
        ]);

        Kategori::create([
            'name' => 'WANITA',
            'link' => '/kategori/wanita',
            'hover' => '<HoverCategoryWanita />',
        ]);

        Kategori::create([
            'name' => 'KATALOG',
            'link' => '/katalog',
            'hover' => '<HoverKatalog />',
        ]);

    }
}
