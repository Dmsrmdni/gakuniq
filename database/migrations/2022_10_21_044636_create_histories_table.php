<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_produk')->nullable();
            $table->string('kode_transaksi');
            $table->string('nama_pembeli');
            $table->string('nama_produk');
            $table->string('jumlah');
            $table->string('total_harga');
            $table->date('waktu_pemesanan');
            $table->enum('status', ['proses', 'sukses', 'dikembalikan', 'selesai'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
