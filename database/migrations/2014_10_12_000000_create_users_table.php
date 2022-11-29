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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('name')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('referensi')->nullable();

            $table->enum('label_alamat', ['rumah', 'kantor'])->default('rumah')->nullable();
            $table->string('kota_kecamatan')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->enum('role', ['costumer', 'admin'])->default('costumer');
            $table->integer('saldo')->default('0');
            $table->integer('score')->default('0');
            $table->enum('status', ['aktif', 'tidak aktif'])->default('tidak aktif');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
