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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('keranjang_id');
            $table->foreign('keranjang_id')->references('id')->on('keranjangs')->onDelete('cascade');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('voucher_id')->nullable();
            // $table->foreign('voucher_id')->references('id')->on('vouchers')->onDelete('cascade');
            $table->integer('total_harga');
            $table->string('metode_pembayaran');
            $table->date('waktu_pemesanan');
            $table->enum('status', ['proses', 'sukses', 'dikembalikan', 'selesai', 'pengajuan refund'])->default('proses');
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
        Schema::dropIfExists('transaksis');
    }
};
