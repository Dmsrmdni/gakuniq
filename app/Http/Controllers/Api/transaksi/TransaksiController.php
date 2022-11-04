<?php

namespace App\Http\Controllers\Api\transaksi;

use App\Models\User;
use App\Models\Produk;
use App\Models\History;
use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $transaksis = Transaksi::select("id", "kode_transaksi", "user_id" ,"keranjang_id", "metode_pembayaran", "waktu_pemesanan", "voucher_id", "total_harga")->with('keranjang', 'voucher','voucher_user')->where('user_id', auth()->user()->id)->get();
        return response()->json([
            "data" => $transaksis,
            // 'users' => auth()->user()->username,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'keranjang_id' => 'required',
            'metode_pembayaran' => 'required',
            'waktu_pemesanan' => 'required',
            'kode_transaksi' => 'unique:transaksis',
        ]);

        $transaksis = new Transaksi();
        $kode_transaksis = DB::table('transaksis')->select(DB::raw('MAX(RIGHT(kode_transaksi,3)) as kode'));
        if ($kode_transaksis->count() > 0) {
            foreach ($kode_transaksis->get() as $kode_transaksi) {
                $x = ((int) $kode_transaksi->kode) + 1;
                $kode = sprintf("%03s", $x);
            }
        } else {
            $kode = "001";
        }
        $transaksis->user_id = auth()->user()->id;
        $transaksis->kode_transaksi = 'GNQ-' . date('dmy') . $kode;
        $transaksis->keranjang_id = $request->keranjang_id;
        $transaksis->voucher_id = $request->voucher_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->waktu_pemesanan = $request->waktu_pemesanan;

        if ($transaksis->voucher_id == '') {
            $diskon = 0;
        } else {
            $diskon = (($transaksis->voucher->diskon * $transaksis->keranjang->total_harga) / 100);
        }
        $transaksis->total_harga = $transaksis->keranjang->total_harga - $diskon;

        // stok produk
        $produks = Produk::findOrFail($transaksis->keranjang->produk_id);
        if ($produks->stok < $transaksis->keranjang->jumlah) {
            return response()->json(["message" => "stok kurang"]);

        } else {
            $produks->stok -= $transaksis->keranjang->jumlah;
        }
        $produks->save();

        // score
        $users = User::findOrFail($transaksis->keranjang->user_id);
        if ($transaksis->total_harga >= 100000 && $transaksis->total_harga < 199999) {
            $users->score += 10;
        } elseif ($transaksis->total_harga >= 200000 && $transaksis->total_harga < 299999) {
            $users->score += 20;
        } elseif ($transaksis->total_harga >= 300000 && $transaksis->total_harga < 399999) {
            $users->score += 30;
        } elseif ($transaksis->total_harga >= 400000) {
            $users->score += 50;
        }
        $users->save();

        // saldo
        if ($transaksis->metode_pembayaran == 'gakuniq wallet') {
            if ($users->saldo < $transaksis->total_harga) {
                return response()->json(["message" => "saldo kurang"]);
            } else {
                $users->saldo -= $transaksis->total_harga;
            }
            $users->save();
        }

        // History
        $histories = new History();
        $histories->kode_transaksi = $transaksis->kode_transaksi;
        $histories->nama_pembeli = $transaksis->keranjang->user->username;
        $histories->nama_produk = $transaksis->keranjang->produk->nama_produk;
        $histories->waktu_pemesanan = $transaksis->waktu_pemesanan;
        $histories->save();

        // Keranjang
        // $keranjangs = Keranjang::findOrFail(12);
        // $keranjangs->jumlah = 20;
        // $keranjangs->save();

        $transaksis->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Transaksi",
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $transaksis = Transaksi::findMany($id);
        return response()->json([
            "data" => $transaksis,
            "status" => 200,
        ]);

    }
}
