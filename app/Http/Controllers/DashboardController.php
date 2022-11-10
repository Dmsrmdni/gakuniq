<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Review_produk;
use App\Models\Riwayat_produk;
use App\Models\TopUp;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Voucher;

class DashboardController extends Controller
{
    public function index()
    {
        // barang
        $barang_masuk = Riwayat_produk::where('type', 'masuk')->count();
        $barang_keluar = Riwayat_produk::where('type', 'keluar')->count();
        $barang_masuk_jan = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '01')->count();
        $barang_masuk_feb = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '02')->count();
        $barang_masuk_mar = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '03')->count();
        $barang_masuk_apr = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '04')->count();
        $barang_masuk_mei = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '05')->count();
        $barang_masuk_jun = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '06')->count();
        $barang_masuk_jul = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '07')->count();
        $barang_masuk_agu = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '08')->count();
        $barang_masuk_sep = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '09')->count();
        $barang_masuk_okt = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '10')->count();
        $barang_masuk_nov = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '11')->count();
        $barang_masuk_des = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '12')->count();

        $barang_keluar_jan = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '01')->count();
        $barang_keluar_feb = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '02')->count();
        $barang_keluar_mar = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '03')->count();
        $barang_keluar_apr = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '04')->count();
        $barang_keluar_mei = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '05')->count();
        $barang_keluar_jun = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '06')->count();
        $barang_keluar_jul = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '07')->count();
        $barang_keluar_agu = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '08')->count();
        $barang_keluar_sep = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '09')->count();
        $barang_keluar_okt = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '10')->count();
        $barang_keluar_nov = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '11')->count();
        $barang_keluar_des = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '12')->count();
        // endbarang

        // pembelian
        $pembelian_jan = Transaksi::whereMonth('waktu_pemesanan', '01')->count();
        $pembelian_feb = Transaksi::whereMonth('waktu_pemesanan', '02')->count();
        $pembelian_mar = Transaksi::whereMonth('waktu_pemesanan', '03')->count();
        $pembelian_apr = Transaksi::whereMonth('waktu_pemesanan', '04')->count();
        $pembelian_mei = Transaksi::whereMonth('waktu_pemesanan', '05')->count();
        $pembelian_jun = Transaksi::whereMonth('waktu_pemesanan', '06')->count();
        $pembelian_jul = Transaksi::whereMonth('waktu_pemesanan', '07')->count();
        $pembelian_agu = Transaksi::whereMonth('waktu_pemesanan', '08')->count();
        $pembelian_sep = Transaksi::whereMonth('waktu_pemesanan', '09')->count();
        $pembelian_okt = Transaksi::whereMonth('waktu_pemesanan', '10')->count();
        $pembelian_nov = Transaksi::whereMonth('waktu_pemesanan', '11')->count();
        $pembelian_des = Transaksi::whereMonth('waktu_pemesanan', '12')->count();

        //endPembelian
        // User
        $total_users = User::where('role', auth()->user()->role = 'costumer')->count();
        $total_produks = Produk::count();
        $total_review_produks = Review_produk::count();
        $total_vouchers = Voucher::count();
        $total_top_ups = TopUp::count();
        $total_kategoris = Kategori::count();
        $total_transaksis = Transaksi::count();

        // EndUser

        return view('admin.index', compact(
            'barang_masuk',
            'barang_keluar',
            //barangMasuk
            'barang_masuk_jan',
            'barang_masuk_feb',
            'barang_masuk_mar',
            'barang_masuk_apr',
            'barang_masuk_mei',
            'barang_masuk_jun',
            'barang_masuk_jul',
            'barang_masuk_agu',
            'barang_masuk_sep',
            'barang_masuk_okt',
            'barang_masuk_nov',
            'barang_masuk_des',
            // EndBarangMasuk
            // barangKeluar
            'barang_keluar_jan',
            'barang_keluar_feb',
            'barang_keluar_mar',
            'barang_keluar_apr',
            'barang_keluar_mei',
            'barang_keluar_jun',
            'barang_keluar_jul',
            'barang_keluar_agu',
            'barang_keluar_sep',
            'barang_keluar_okt',
            'barang_keluar_nov',
            'barang_keluar_des',
            // endBarangKeluar

            //Pembelian
            'pembelian_jan',
            'pembelian_feb',
            'pembelian_mar',
            'pembelian_apr',
            'pembelian_mei',
            'pembelian_jun',
            'pembelian_jul',
            'pembelian_agu',
            'pembelian_sep',
            'pembelian_okt',
            'pembelian_nov',
            'pembelian_des',
            // EndPembelian

            // User
            'total_users',
            'total_produks',
            'total_review_produks',
            'total_vouchers',
            'total_top_ups',
            'total_transaksis',

            // EndUser
        ));

    }
}
