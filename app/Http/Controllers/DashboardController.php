<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Produk;
use App\Models\Riwayat_produk;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Voucher_user;

class DashboardController extends Controller
{
    public function index()
    {
        // BarangMasukKeluar2021
        $barang_masuk_2021 = Riwayat_produk::where('type', 'masuk')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_2021 = Riwayat_produk::where('type', 'keluar')->whereYear('waktu_riwayat', '2021')->count();
        // endBarangMasukKeluar2021

        // BarangMasuk_2021
        $barang_masuk_jan_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_feb_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_mar_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_apr_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_mei_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_jun_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_jul_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_agu_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_sep_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_okt_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_nov_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2021')->count();
        $barang_masuk_des_2021 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2021')->count();
        // endBarangMasuk_2021

        // BarangKeluar_2021
        $barang_keluar_jan_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_feb_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_mar_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_apr_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_mei_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_jun_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_jul_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_agu_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_sep_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_okt_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_nov_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2021')->count();
        $barang_keluar_des_2021 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2021')->count();
        // endBarangKeluar_2021

        // BarangMasukKeluar2022
        $barang_masuk_2022 = Riwayat_produk::where('type', 'masuk')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_2022 = Riwayat_produk::where('type', 'keluar')->whereYear('waktu_riwayat', '2022')->count();
        // endBarangMasukKeluar2022

        // BarangMasuk_2022
        $barang_masuk_jan_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_feb_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_mar_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_apr_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_mei_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_jun_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_jul_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_agu_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_sep_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_okt_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_nov_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2022')->count();
        $barang_masuk_des_2022 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2022')->count();
        // endBarangMasuk_2022

        // BarangKeluar_2022
        $barang_keluar_jan_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_feb_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_mar_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_apr_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_mei_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_jun_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_jul_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_agu_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_sep_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_okt_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_nov_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2022')->count();
        $barang_keluar_des_2022 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2022')->count();
        // endBarangKeluar_2022

        // BarangMasukKeluar2023
        $barang_masuk_2023 = Riwayat_produk::where('type', 'masuk')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_2023 = Riwayat_produk::where('type', 'keluar')->whereYear('waktu_riwayat', '2023')->count();
        // endBarangMasukKeluar2023

        // BarangMasuk_2023
        $barang_masuk_jan_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_feb_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_mar_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_apr_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_mei_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_jun_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_jul_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_agu_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_sep_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_okt_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_nov_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2023')->count();
        $barang_masuk_des_2023 = Riwayat_produk::where('type', 'masuk')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2023')->count();
        // endBarangMasuk_2023

        // BarangKeluar_2023
        $barang_keluar_jan_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '01')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_feb_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '02')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_mar_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '03')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_apr_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '04')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_mei_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '05')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_jun_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '06')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_jul_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '07')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_agu_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '08')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_sep_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '09')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_okt_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '10')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_nov_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '11')->whereYear('waktu_riwayat', '2023')->count();
        $barang_keluar_des_2023 = Riwayat_produk::where('type', 'keluar')->whereMonth('waktu_riwayat', '12')->whereYear('waktu_riwayat', '2023')->count();
        // endBarangKeluar_2023

        // pembelianTahun2021
        $pembelian_jan_2021 = Transaksi::whereMonth('waktu_pemesanan', '01')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_feb_2021 = Transaksi::whereMonth('waktu_pemesanan', '02')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_mar_2021 = Transaksi::whereMonth('waktu_pemesanan', '03')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_apr_2021 = Transaksi::whereMonth('waktu_pemesanan', '04')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_mei_2021 = Transaksi::whereMonth('waktu_pemesanan', '05')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_jun_2021 = Transaksi::whereMonth('waktu_pemesanan', '06')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_jul_2021 = Transaksi::whereMonth('waktu_pemesanan', '07')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_agu_2021 = Transaksi::whereMonth('waktu_pemesanan', '08')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_sep_2021 = Transaksi::whereMonth('waktu_pemesanan', '09')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_okt_2021 = Transaksi::whereMonth('waktu_pemesanan', '10')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_nov_2021 = Transaksi::whereMonth('waktu_pemesanan', '11')->whereYear('waktu_pemesanan', '2021')->count();
        $pembelian_des_2021 = Transaksi::whereMonth('waktu_pemesanan', '12')->whereYear('waktu_pemesanan', '2021')->count();
        //endPembelianTahun2021

        // pembelianTahun2022
        $pembelian_jan_2022 = Transaksi::whereMonth('waktu_pemesanan', '01')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_feb_2022 = Transaksi::whereMonth('waktu_pemesanan', '02')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_mar_2022 = Transaksi::whereMonth('waktu_pemesanan', '03')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_apr_2022 = Transaksi::whereMonth('waktu_pemesanan', '04')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_mei_2022 = Transaksi::whereMonth('waktu_pemesanan', '05')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_jun_2022 = Transaksi::whereMonth('waktu_pemesanan', '06')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_jul_2022 = Transaksi::whereMonth('waktu_pemesanan', '07')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_agu_2022 = Transaksi::whereMonth('waktu_pemesanan', '08')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_sep_2022 = Transaksi::whereMonth('waktu_pemesanan', '09')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_okt_2022 = Transaksi::whereMonth('waktu_pemesanan', '10')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_nov_2022 = Transaksi::whereMonth('waktu_pemesanan', '11')->whereYear('waktu_pemesanan', '2022')->count();
        $pembelian_des_2022 = Transaksi::whereMonth('waktu_pemesanan', '12')->whereYear('waktu_pemesanan', '2022')->count();
        //endPembelian2022

        // pembelianTahun2023
        $pembelian_jan_2023 = Transaksi::whereMonth('waktu_pemesanan', '01')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_feb_2023 = Transaksi::whereMonth('waktu_pemesanan', '02')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_mar_2023 = Transaksi::whereMonth('waktu_pemesanan', '03')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_apr_2023 = Transaksi::whereMonth('waktu_pemesanan', '04')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_mei_2023 = Transaksi::whereMonth('waktu_pemesanan', '05')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_jun_2023 = Transaksi::whereMonth('waktu_pemesanan', '06')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_jul_2023 = Transaksi::whereMonth('waktu_pemesanan', '07')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_agu_2023 = Transaksi::whereMonth('waktu_pemesanan', '08')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_sep_2023 = Transaksi::whereMonth('waktu_pemesanan', '09')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_okt_2023 = Transaksi::whereMonth('waktu_pemesanan', '10')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_nov_2023 = Transaksi::whereMonth('waktu_pemesanan', '11')->whereYear('waktu_pemesanan', '2023')->count();
        $pembelian_des_2023 = Transaksi::whereMonth('waktu_pemesanan', '12')->whereYear('waktu_pemesanan', '2023')->count();
        //endPembelian2023

        // pembelianVoucherTahun2021
        $pembelian_voucher_jan_2021 = Voucher_user::whereMonth('created_at', '01')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_feb_2021 = Voucher_user::whereMonth('created_at', '02')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_mar_2021 = Voucher_user::whereMonth('created_at', '03')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_apr_2021 = Voucher_user::whereMonth('created_at', '04')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_mei_2021 = Voucher_user::whereMonth('created_at', '05')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_jun_2021 = Voucher_user::whereMonth('created_at', '06')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_jul_2021 = Voucher_user::whereMonth('created_at', '07')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_agu_2021 = Voucher_user::whereMonth('created_at', '08')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_sep_2021 = Voucher_user::whereMonth('created_at', '09')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_okt_2021 = Voucher_user::whereMonth('created_at', '10')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_nov_2021 = Voucher_user::whereMonth('created_at', '11')->whereYear('created_at', '2021')->count();
        $pembelian_voucher_des_2021 = Voucher_user::whereMonth('created_at', '12')->whereYear('created_at', '2021')->count();
        //endPembelianVoucherTahun2021

        // pembelianVoucherTahun2022
        $pembelian_voucher_jan_2022 = Voucher_user::whereMonth('created_at', '01')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_feb_2022 = Voucher_user::whereMonth('created_at', '02')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_mar_2022 = Voucher_user::whereMonth('created_at', '03')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_apr_2022 = Voucher_user::whereMonth('created_at', '04')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_mei_2022 = Voucher_user::whereMonth('created_at', '05')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_jun_2022 = Voucher_user::whereMonth('created_at', '06')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_jul_2022 = Voucher_user::whereMonth('created_at', '07')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_agu_2022 = Voucher_user::whereMonth('created_at', '08')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_sep_2022 = Voucher_user::whereMonth('created_at', '09')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_okt_2022 = Voucher_user::whereMonth('created_at', '10')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_nov_2022 = Voucher_user::whereMonth('created_at', '11')->whereYear('created_at', '2022')->count();
        $pembelian_voucher_des_2022 = Voucher_user::whereMonth('created_at', '12')->whereYear('created_at', '2022')->count();
        //endPembelianVoucherTahun2022

        // pembelianVoucherTahun2023
        $pembelian_voucher_jan_2023 = Voucher_user::whereMonth('created_at', '01')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_feb_2023 = Voucher_user::whereMonth('created_at', '02')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_mar_2023 = Voucher_user::whereMonth('created_at', '03')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_apr_2023 = Voucher_user::whereMonth('created_at', '04')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_mei_2023 = Voucher_user::whereMonth('created_at', '05')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_jun_2023 = Voucher_user::whereMonth('created_at', '06')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_jul_2023 = Voucher_user::whereMonth('created_at', '07')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_agu_2023 = Voucher_user::whereMonth('created_at', '08')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_sep_2023 = Voucher_user::whereMonth('created_at', '09')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_okt_2023 = Voucher_user::whereMonth('created_at', '10')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_nov_2023 = Voucher_user::whereMonth('created_at', '11')->whereYear('created_at', '2023')->count();
        $pembelian_voucher_des_2023 = Voucher_user::whereMonth('created_at', '12')->whereYear('created_at', '2023')->count();
        //endPembelianVoucherTahun2023

        // PendapatanTransaksi
        // 2021
        $transaksis_2021 = Transaksi::whereIn('status', ['selesai', 'sukses'])->whereYear('waktu_pemesanan', '2021')->get();
        $pendapatan_produk_2021 = collect($transaksis_2021)
            ->reduce(function ($carry, $item) {
                return $carry + $item->total_harga - ($item->keranjang->produk->hpp * $item->keranjang->jumlah);
            }, 0);
        // End2021
        // 2022
        $transaksis_2022 = Transaksi::whereIn('status', ['selesai', 'sukses'])->whereYear('waktu_pemesanan', '2022')->get();
        $pendapatan_produk_2022 = collect($transaksis_2022)
            ->reduce(function ($carry, $item) {
                return $carry + $item->total_harga - ($item->keranjang->produk->hpp * $item->keranjang->jumlah);
            }, 0);
        // End2022
        // 2023
        $transaksis_2023 = Transaksi::whereIn('status', ['selesai', 'sukses'])->whereYear('waktu_pemesanan', '2023')->get();
        $pendapatan_produk_2023 = collect($transaksis_2023)
            ->reduce(function ($carry, $item) {
                return $carry + $item->total_harga - ($item->keranjang->produk->hpp * $item->keranjang->jumlah);
            }, 0);
        // End2023
        // EndPendapatanTransaksi

        // PendapatanVoucher
        // 2021
        $voucher_users_2021 = Voucher_user::whereYear('created_at', '2021')->get();
        $pendapatan_voucher_2021 = collect($voucher_users_2021)
            ->reduce(function ($carry, $item) {
                return $carry + $item->voucher->harga;
            }, 0);
        // end2021
        // 2022
        $voucher_users_2022 = Voucher_user::whereYear('created_at', '2022')->get();
        $pendapatan_voucher_2022 = collect($voucher_users_2022)
            ->reduce(function ($carry, $item) {
                return $carry + $item->voucher->harga;
            }, 0);
        // end2022
        // 2021
        $voucher_users_2023 = Voucher_user::whereYear('created_at', '2023')->get();
        $pendapatan_voucher_2023 = collect($voucher_users_2023)
            ->reduce(function ($carry, $item) {
                return $carry + $item->voucher->harga;
            }, 0);
        // end2023
        // EndPendapatanVoucher

        // Total Pendapatan
        // 2021
        $total_pendapatan_2021 = $pendapatan_produk_2021 + $pendapatan_voucher_2021;
        // end2021
        // 2022
        $total_pendapatan_2022 = $pendapatan_produk_2022 + $pendapatan_voucher_2022;
        // end2022
        // 2023
        $total_pendapatan_2023 = $pendapatan_produk_2023 + $pendapatan_voucher_2023;
        // end2023
        // EndTotalpendapatan

        // UserRegister
        $users_2021 = User::where('role', auth()->user()->role = 'costumer')->whereYear('created_at', '2021')->count();
        $users_2022 = User::where('role', auth()->user()->role = 'costumer')->whereYear('created_at', '2022')->count();
        $users_2023 = User::where('role', auth()->user()->role = 'costumer')->whereYear('created_at', '2023')->count();
        // endUserRegister

        // produkTerjual
        // 2021
        $produk_terjual_2021 = collect($transaksis_2021)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // End2021
        // 2022
        $produk_terjual_2022 = collect($transaksis_2022)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // End2022
        // 2023
        $produk_terjual_2023 = collect($transaksis_2023)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // End2023

        // EndprodukTerjual

        // RefundProduk
        // 2021
        $refund_2021 = Transaksi::where('status', 'dikembalikan')->whereYear('waktu_pemesanan', '2021')->get();
        $refund_produk_2021 = collect($refund_2021)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // end2021
        // 2022
        $refund_2022 = Transaksi::where('status', 'dikembalikan')->whereYear('waktu_pemesanan', '2022')->get();
        $refund_produk_2022 = collect($refund_2022)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // end2022
        // 2023
        $refund_2023 = Transaksi::where('status', 'dikembalikan')->whereYear('waktu_pemesanan', '2023')->get();
        $refund_produk_2023 = collect($refund_2023)
            ->reduce(function ($carry, $item) {
                return $carry + $item->keranjang->jumlah;
            }, 0);
        // end2023

        // EndRefundProduk

        $chats = Chat::all();

        return view('admin.index', compact(
            // barangMasuk/keluar2021
            'barang_masuk_2021',
            'barang_keluar_2021',
            //endbarangMasuk/keluar2021

            // barangMasuk2021
            'barang_masuk_jan_2021',
            'barang_masuk_feb_2021',
            'barang_masuk_mar_2021',
            'barang_masuk_apr_2021',
            'barang_masuk_mei_2021',
            'barang_masuk_jun_2021',
            'barang_masuk_jul_2021',
            'barang_masuk_agu_2021',
            'barang_masuk_sep_2021',
            'barang_masuk_okt_2021',
            'barang_masuk_nov_2021',
            'barang_masuk_des_2021',
            // EndBarangMasuk2021

            // barangKeluar2021
            'barang_keluar_jan_2021',
            'barang_keluar_feb_2021',
            'barang_keluar_mar_2021',
            'barang_keluar_apr_2021',
            'barang_keluar_mei_2021',
            'barang_keluar_jun_2021',
            'barang_keluar_jul_2021',
            'barang_keluar_agu_2021',
            'barang_keluar_sep_2021',
            'barang_keluar_okt_2021',
            'barang_keluar_nov_2021',
            'barang_keluar_des_2021',
            // endBarangKeluar2021

            // barangMasuk/keluar2022
            'barang_masuk_2022',
            'barang_keluar_2022',
            //endbarangMasuk/keluar2022

            // barangMasuk2022
            'barang_masuk_jan_2022',
            'barang_masuk_feb_2022',
            'barang_masuk_mar_2022',
            'barang_masuk_apr_2022',
            'barang_masuk_mei_2022',
            'barang_masuk_jun_2022',
            'barang_masuk_jul_2022',
            'barang_masuk_agu_2022',
            'barang_masuk_sep_2022',
            'barang_masuk_okt_2022',
            'barang_masuk_nov_2022',
            'barang_masuk_des_2022',
            // EndBarangMasuk2022

            // barangKeluar2022
            'barang_keluar_jan_2022',
            'barang_keluar_feb_2022',
            'barang_keluar_mar_2022',
            'barang_keluar_apr_2022',
            'barang_keluar_mei_2022',
            'barang_keluar_jun_2022',
            'barang_keluar_jul_2022',
            'barang_keluar_agu_2022',
            'barang_keluar_sep_2022',
            'barang_keluar_okt_2022',
            'barang_keluar_nov_2022',
            'barang_keluar_des_2022',
            // endBarangKeluar2022

            // barangMasuk/keluar2023
            'barang_masuk_2023',
            'barang_keluar_2023',
            //endbarangMasuk/keluar2023

            // barangMasuk2023
            'barang_masuk_jan_2023',
            'barang_masuk_feb_2023',
            'barang_masuk_mar_2023',
            'barang_masuk_apr_2023',
            'barang_masuk_mei_2023',
            'barang_masuk_jun_2023',
            'barang_masuk_jul_2023',
            'barang_masuk_agu_2023',
            'barang_masuk_sep_2023',
            'barang_masuk_okt_2023',
            'barang_masuk_nov_2023',
            'barang_masuk_des_2023',
            // EndBarangMasuk2023

            // barangKeluar2023
            'barang_keluar_jan_2023',
            'barang_keluar_feb_2023',
            'barang_keluar_mar_2023',
            'barang_keluar_apr_2023',
            'barang_keluar_mei_2023',
            'barang_keluar_jun_2023',
            'barang_keluar_jul_2023',
            'barang_keluar_agu_2023',
            'barang_keluar_sep_2023',
            'barang_keluar_okt_2023',
            'barang_keluar_nov_2023',
            'barang_keluar_des_2023',
            // endBarangKeluar2023

            //PembelianTahun2021
            'pembelian_jan_2021',
            'pembelian_feb_2021',
            'pembelian_mar_2021',
            'pembelian_apr_2021',
            'pembelian_mei_2021',
            'pembelian_jun_2021',
            'pembelian_jul_2021',
            'pembelian_agu_2021',
            'pembelian_sep_2021',
            'pembelian_okt_2021',
            'pembelian_nov_2021',
            'pembelian_des_2021',
            // EndPembelianTahun2021

            //PembelianTahun2022
            'pembelian_jan_2022',
            'pembelian_feb_2022',
            'pembelian_mar_2022',
            'pembelian_apr_2022',
            'pembelian_mei_2022',
            'pembelian_jun_2022',
            'pembelian_jul_2022',
            'pembelian_agu_2022',
            'pembelian_sep_2022',
            'pembelian_okt_2022',
            'pembelian_nov_2022',
            'pembelian_des_2022',
            // EndPembelianTahun2022

            //PembelianTahun2023
            'pembelian_jan_2023',
            'pembelian_feb_2023',
            'pembelian_mar_2023',
            'pembelian_apr_2023',
            'pembelian_mei_2023',
            'pembelian_jun_2023',
            'pembelian_jul_2023',
            'pembelian_agu_2023',
            'pembelian_sep_2023',
            'pembelian_okt_2023',
            'pembelian_nov_2023',
            'pembelian_des_2023',
            // EndPembelianTahun2023

            //PembelianVoucherTahun2021
            'pembelian_voucher_jan_2021',
            'pembelian_voucher_feb_2021',
            'pembelian_voucher_mar_2021',
            'pembelian_voucher_apr_2021',
            'pembelian_voucher_mei_2021',
            'pembelian_voucher_jun_2021',
            'pembelian_voucher_jul_2021',
            'pembelian_voucher_agu_2021',
            'pembelian_voucher_sep_2021',
            'pembelian_voucher_okt_2021',
            'pembelian_voucher_nov_2021',
            'pembelian_voucher_des_2021',
            // EndPembelianVoucherTahun2021

            //PembelianVoucherTahun2022
            'pembelian_voucher_jan_2022',
            'pembelian_voucher_feb_2022',
            'pembelian_voucher_mar_2022',
            'pembelian_voucher_apr_2022',
            'pembelian_voucher_mei_2022',
            'pembelian_voucher_jun_2022',
            'pembelian_voucher_jul_2022',
            'pembelian_voucher_agu_2022',
            'pembelian_voucher_sep_2022',
            'pembelian_voucher_okt_2022',
            'pembelian_voucher_nov_2022',
            'pembelian_voucher_des_2022',
            // EndPembelianVoucherTahun2022

            //PembelianVoucherTahun2023
            'pembelian_voucher_jan_2023',
            'pembelian_voucher_feb_2023',
            'pembelian_voucher_mar_2023',
            'pembelian_voucher_apr_2023',
            'pembelian_voucher_mei_2023',
            'pembelian_voucher_jun_2023',
            'pembelian_voucher_jul_2023',
            'pembelian_voucher_agu_2023',
            'pembelian_voucher_sep_2023',
            'pembelian_voucher_okt_2023',
            'pembelian_voucher_nov_2023',
            'pembelian_voucher_des_2023',
            // EndPembelianVoucherTahun2023

            // User
            'users_2021',
            'users_2022',
            'users_2023',
            // EndUser

            // Pendapatan
            'pendapatan_produk_2021',
            'pendapatan_produk_2022',
            'pendapatan_produk_2023',
            // EndPendapatan

            // Pendapatan
            'pendapatan_voucher_2021',
            'pendapatan_voucher_2022',
            'pendapatan_voucher_2023',
            // EndPendapatan

            // Total Pendapatan
            'total_pendapatan_2021',
            'total_pendapatan_2022',
            'total_pendapatan_2023',
            // EndTotalPendapatan

            // ProdukTerjual
            'produk_terjual_2021',
            'produk_terjual_2022',
            'produk_terjual_2023',
            // EndProdukTerjual

            // RefundProduk
            'refund_produk_2021',
            'refund_produk_2022',
            'refund_produk_2023',
            // EndRefundProduk
            'chats',
        ));

    }
}
