<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voucher::create([
            'kode_voucher' => 'LebaranFest',
            'harga' => 0,
            'label' => 'gratis',
            'diskon' => 4,
            'waktu_mulai' => '2022-11-10',
            'waktu_berakhir' => '2022-12-09',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'OktoberFest',
            'harga' => 0,
            'label' => 'gratis',
            'diskon' => 7,
            'waktu_mulai' => '2022-10-01',
            'waktu_berakhir' => '2022-10-30',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'SeptemberFest',
            'harga' => 0,
            'label' => 'gratis',
            'diskon' => 4,
            'waktu_mulai' => '2022-11-10',
            'waktu_berakhir' => '2022-11-30',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'TahunBaruFest',
            'harga' => 0,
            'label' => 'gratis',
            'diskon' => 6,
            'waktu_mulai' => '2022-12-01',
            'waktu_berakhir' => '2022-12-09',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'NatalFest',
            'harga' => 0,
            'label' => 'gratis',
            'diskon' => 5,
            'waktu_mulai' => '2022-11-15',
            'waktu_berakhir' => '2022-12-10',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'Spesial Pengguna Baru',
            'harga' => 10000,
            'label' => 'berbayar',
            'diskon' => 8,
            'waktu_mulai' => '2022-11-10',
            'waktu_berakhir' => '2022-12-09',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'Spesial Ulang Tahun',
            'harga' => 170000,
            'label' => 'berbayar',
            'diskon' => 10,
            'waktu_mulai' => '2022-10-01',
            'waktu_berakhir' => '2022-10-30',
            'status' => 'aktif',
        ]);

        Voucher::create([
            'kode_voucher' => 'Spesial Kemerdekaan',
            'harga' => 15000,
            'label' => 'berbayar',
            'diskon' => 9,
            'waktu_mulai' => '2022-11-10',
            'waktu_berakhir' => '2022-11-30',
            'status' => 'aktif',
        ]);

    }
}
