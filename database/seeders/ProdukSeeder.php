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

        // Laki - Laki
        Produk::create([
            'kategori_id' => 1,
            'sub_kategori_id' => 1,
            'nama_produk' => 'limbo-ts',
            'hpp' => 70000,
            'harga' => 100000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Black 20s cotton short sleeve T-shirts, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, satin & cotton label, double needle sleeve and bottom hem, multi color plastisol ink screen print.',
            'gambar_produk1' => 'images/gambar_produk1/limbo-ts 1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/limbo-ts 2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/limbo-ts 3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/bells-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/bells-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/bells-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/israth-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/israth-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/israth-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/matsuit-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/matsuit-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/matsuit-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/serra-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/serra-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/serra-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/Bananach-Tour-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/Bananach-Tour-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/Bananach-Tour-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/kinari-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/kinari-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/kinari-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/simplex-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/simplex-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/simplex-3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/shuts-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/shuts-2.jpg',
            'gambar_produk3' => 'images/gambar_produk2/shuts-3.jpg',
        ]);
        // EndLakiLaki

        // Perempuan
        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 4,
            'nama_produk' => 'Serayu',
            'hpp' => 150000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Serayu  tunic dengan cuttingan loose dan detail kancing full dibagian depan dan variasi kancing yang melingkar dibagian bawah menciptakan lengkungan dibagian depan.',
            'gambar_produk1' => 'images/gambar_produk1/serayu1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/serayu2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/serayu3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/rahara1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/rahara2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/rahara3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/yuwana1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/yuwana2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/yuwana3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/gatra1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/gatra2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/gatra3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/kamala1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/kamala2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/kamala3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/kalis1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/kalis2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/kalis3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'sub_kategori_id' => 6,
            'nama_produk' => 'Arune',
            'hpp' => 120000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Aruna Blouse  perpaduan material Tencel dan Cotton Texture dengan warna yang senada, menambah kesan stylish namun tetap simple. Bukaan kancing dibagian belakang, dan ada  variasi cuttingan belahan dibagian samping depan.',
            'gambar_produk1' => 'images/gambar_produk1/arune1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/arune2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/arune3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/rinai1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/rinai2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/rinai3.jpg',
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
            'gambar_produk1' => 'images/gambar_produk1/ugahari1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/ugahari2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/ugahari3.jpg',
        ]);
        // EndPerempuan

        // Anak
        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 7,
            'nama_produk' => 'LC Waikiki',
            'hpp' => 80000,
            'harga' => 150000,
            'stok' => 50,
            'diskon' => 2,
            'deskripsi' => 'Judge Collar Basic Long Sleeve Cotton Boys Shirt',
            'gambar_produk1' => 'images/gambar_produk1/lc-waikiki-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/lc-waikiki-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/lc-waikiki-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 7,
            'nama_produk' => 'DeFacto',
            'hpp' => 80000,
            'harga' => 190000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Long Sleeve Denim Shirt',
            'gambar_produk1' => 'images/gambar_produk1/defacto1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/defacto2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/defacto3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 7,
            'nama_produk' => 'Knot',
            'hpp' => 100000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Polo boy cotton Ralph',
            'gambar_produk1' => 'images/gambar_produk1/knot-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/knot-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/knot-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 8,
            'nama_produk' => 'MANGO BABY',
            'hpp' => 90000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Printed Short Pyjama Set',
            'gambar_produk1' => 'images/gambar_produk1/mango-baby-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/mango-baby-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/mango-baby-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 8,
            'nama_produk' => 'Delacto',
            'hpp' => 100000,
            'harga' => 170000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Long Sleeve Denim Shirt',
            'gambar_produk1' => 'images/gambar_produk1/delacto-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/delacto-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/delacto-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 8,
            'nama_produk' => 'Lc astroth',
            'hpp' => 120000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 4,
            'deskripsi' => 'Judge Collar Long Sleeve Cotton Baby Boy Shirt',
            'gambar_produk1' => 'images/gambar_produk1/lc-astroth-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/lc-astroth-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/lc-astroth-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 9,
            'nama_produk' => 'Under Armour',
            'hpp' => 110000,
            'harga' => 180000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Project Rock Brahman Globe Long Sleeve Tee',
            'gambar_produk1' => 'images/gambar_produk1/under-armour-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/under-armour-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/under-armour-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 9,
            'nama_produk' => 'gap',
            'hpp' => 120000,
            'harga' => 200000,
            'stok' => 50,
            'diskon' => 3,
            'deskripsi' => 'Franchise Logo Hoodie',
            'gambar_produk1' => 'images/gambar_produk1/gap-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/gap-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/gap-3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'sub_kategori_id' => 9,
            'nama_produk' => 'cardinal ',
            'hpp' => 70000,
            'harga' => 160000,
            'stok' => 50,
            'diskon' => 0,
            'deskripsi' => 'Jaket Loreng Hoodie',
            'gambar_produk1' => 'images/gambar_produk1/cardinal-1.jpg',
            'gambar_produk2' => 'images/gambar_produk2/cardinal-2.jpg',
            'gambar_produk3' => 'images/gambar_produk3/cardinal-3.jpg',
        ]);
        // EndAnak

    }

}
