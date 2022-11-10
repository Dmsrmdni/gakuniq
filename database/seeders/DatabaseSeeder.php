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
        // \App\Models\User::factory(3)->create();

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

        User::create([
            'nama_depan' => 'Dikha',
            'nama_belakang' => 'Nugraha',
            'no_telepon' => '0897659876349',
            'username' => 'Nugraha',
            'email' => 'nugraha@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2004-12-08',
            'jenis_kelamin' => 'Laki-laki',
            'kota_kecamatan' => 'Sumedang',
            'alamat_lengkap' => 'jln wado rt 08 rw 12',
        ]);

        User::create([
            'nama_depan' => 'Dinar',
            'nama_belakang' => 'Arya',
            'no_telepon' => '081765627304',
            'username' => 'Arya',
            'email' => 'dinar@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2004-10-05',
            'jenis_kelamin' => 'Laki-laki',
            'kota_kecamatan' => 'bandung',
            'alamat_lengkap' => 'jln cangkuang wetan rt 02 rw 06',
        ]);

        User::create([
            'nama_depan' => 'Melani',
            'nama_belakang' => 'Wulan sari',
            'no_telepon' => '082390483764',
            'username' => 'Melaniii',
            'email' => 'melani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2005-02-11',
            'jenis_kelamin' => 'Perempuan',
            'kota_kecamatan' => 'bandung',
            'alamat_lengkap' => 'kp cembul rt 07 rw 02',
        ]);

        User::create([
            'nama_depan' => 'Haddad',
            'nama_belakang' => 'Hikmah',
            'no_telepon' => '084320934831',
            'username' => 'Haddad',
            'email' => 'haddad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2004-05-12',
            'jenis_kelamin' => 'Laki-laki',
            'kota_kecamatan' => 'Bandung',
            'alamat_lengkap' => 'jln bojong koneng rt 11 rw 08',
        ]);

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

        // Sub_kategori::create([
        //     'kategori_id' => 1,
        //     'sub_kategori' => 'Formal Pria',
        // ]);

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

        // Sub_kategori::create([
        //     'kategori_id' => 2,
        //     'sub_kategori' => 'Formal Wanita',
        // ]);

        \App\Models\Produk::factory(5)->create();

    }
}
