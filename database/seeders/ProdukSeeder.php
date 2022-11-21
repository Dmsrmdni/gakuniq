<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 1,
            'nama_produk' => 'limbo-ts',
            'hpp' => 70000,
            'harga' => 100000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black 20s cotton short sleeve T-shirts, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, satin & cotton label, double needle sleeve and bottom hem, multi color plastisol ink screen print.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 1,
            'nama_produk' => 'Bells',
            'hpp' => 120000,
            'harga' => 150000,
            'stok' => 50,
            'diskon' => 5,
            'deskripsi' => 'Black polyester slimfit long pants with woven label at back pocket.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 1,
            'nama_produk' => 'Israth',
            'hpp' => 150000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black cotton terry fielder jacket with black buttons & cotton label.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 2,
            'nama_produk' => 'Matsuit',
            'hpp' => 150000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black twill cotton collar jacket / coat with black plastic buttons and woven label.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 2,
            'nama_produk' => 'Serra',
            'hpp' => 120000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 3,
            'deskripsi' => 'Black color twill cotton slim fit chino long pants with leather patch and woven patch.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 2,
            'nama_produk' => 'BANANACH TOUR',
            'hpp' => 70000,
            'harga' => 120000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'White 20s cotton long sleeve T-shirts, open-end yarn, 100% cotton, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, satin & cotton label, rib cuffs, double needle bottom hem, and black plastisol ink screen print.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 3,
            'nama_produk' => 'kinari',
            'hpp' => 40000,
            'harga' => 80000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black 24s cotton short sleeve seamless / tubular T-shirt with light green color plastisol ink screen print.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 3,
            'nama_produk' => 'Simplex',
            'hpp' => 120000,
            'harga' => 160000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black cotton fleece crewneck, woven patch.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 3,
            'nama_produk' => 'shuts',
            'hpp' => 120000,
            'harga' => 160000,
            'stok' => 50,
            'diskon' => 4,
            'deskripsi' => 'Cream / khaki cotton twill slimfit cargo longpants with brown leather patch.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        //
        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 4,
            'nama_produk' => 'Serayu',
            'hpp' => 150000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Serayu  tunic dengan cuttingan loose dan detail kancing full dibagian depan dan variasi kancing yang melingkar dibagian bawah menciptakan lengkungan dibagian depan.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 4,
            'nama_produk' => 'Rahara',
            'hpp' => 70000,
            'harga' => 150000,
            'stok' => 50,
            'diskon' => 3,
            'deskripsi' => 'Rahara outer dari material eco linen yang berserat ringan,  breatheable dan ramah lingkungan, dengan cuttingan over size dan  lengan batwing',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 4,
            'nama_produk' => 'Yuwana',
            'hpp' => 100000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Yuwana skirt dengan material Tencel yang nyaman, aman disemua tipe kulit dan ramah lingkungan. Cuttingan semi A line dengan tambahan aksen lipit dibagian atas dan tumpukan satu lipitan dibagian pinggir. Dilengkapi karet dibagian belakang  yang bisa menyesuaikan dengan ukuran lingkar pinggang saat dipakai.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 5,
            'nama_produk' => 'Gatra',
            'hpp' => 120000,
            'harga' => 180000,
            'stok' => 50,
            'diskon' => 5,
            'deskripsi' => 'Gatra Blouse dengan detail aksen jahitan diagonal dibagian dada dipadukan dengan  kancing bungkus. Lipitan kecil dibagian bahu kiri dan kanan.  Pemakaian Kancing bungkus yang menambah kesan rapi, untuk bukaan dibagian leher belakang.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 5,
            'nama_produk' => 'Kamala',
            'hpp' => 100000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Kamala tunic dengan aksen  dibagian lengan membuat lengan menjadi lebih bervolume namun tetap nyaman karena jahitan smock hanya diletakan dibagian atas jadi tidak akan ketat dan membekas dibagian lengan. Cuttingan loose yang nyaman dengan bukaan kancing full dibagian depan. Menggunakan material Tencel yang aman dan nyaman dikulit juga ramah lingkungan.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 5,
            'nama_produk' => 'Kalis',
            'hpp' => 120000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Kalis Cullote dengan material edith twill yang jatuh, ringan dan stretch saat dipakai. Cuttingan lurus ditambah karet dibagian pinggang belakang sehingga bisa melar saat dipakai dan bisa menyesuaikan dengan lingkar pinggang.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 6,
            'nama_produk' => 'Aruna',
            'hpp' => 120000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Aruna Blouse  perpaduan material Tencel dan Cotton Texture dengan warna yang senada, menambah kesan stylish namun tetap simple. Bukaan kancing dibagian belakang, dan ada  variasi cuttingan belahan dibagian samping depan.',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 6,
            'nama_produk' => 'Rinai',
            'hpp' => 110000,
            'harga' => 190000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Rinai pants dengan material edith twill yang ringan, jatuh dan stretch saat dipakai. Cuttingan yang classic dengan bagian karet dibelakang sehingga bisa melar dan nyaman untuk digunakan  dan bisa menyesuaikan dengan lingkar pinggang. Dengan tambahan saku di sisi kanan dan kiri',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 6,
            'nama_produk' => 'Ugahari',
            'hpp' => 70000,
            'harga' => 160000,
            'stok' => 50,
            'diskon' => 4,
            'deskripsi' => 'Ugahari tunic dengan cuttingan loose dan oversize dibagian tangan, dan sedikit lipatan dibawah kancing. Bukaan kancing dibagian depab dan detail dibagian belakang yang lebih Panjang. Menggunakan material Tencel yang nyaman dan aman untuk semua tipe kulit juga ramah lingkungan',
            'gambar_produk1' => 'https://via.placeholder.com/150',
            'gambar_produk2' => 'https://via.placeholder.com/150',
            'gambar_produk3' => 'https://via.placeholder.com/150',
        ]);

    }

}
