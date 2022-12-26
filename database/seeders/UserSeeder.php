<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_depan' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'nama_depan' => 'Dikha',
            'nama_belakang' => 'Nugraha',
            'no_telepon' => '0897659876349',
            'name' => 'Nugraha',
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
            'name' => 'Arya',
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
            'name' => 'Melaniii',
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
            'name' => 'Haddad',
            'email' => 'haddad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2004-05-12',
            'jenis_kelamin' => 'Laki-laki',
            'kota_kecamatan' => 'Bandung',
            'alamat_lengkap' => 'jln bojong koneng rt 11 rw 08',
        ]);

        User::create([
            'nama_depan' => 'Radit',
            'nama_belakang' => 'Dika',
            'no_telepon' => '089123912306',
            'name' => 'Raditt',
            'email' => 'radit@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'tanggal_lahir' => '2004-05-12',
            'jenis_kelamin' => 'Laki-laki',
            'kota_kecamatan' => 'Bandung',
            'alamat_lengkap' => 'jln Rancamanyar rt 12 rw 10',
        ]);

    }
}
