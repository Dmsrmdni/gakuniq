<?php

namespace App\Http\Controllers\Api\refund_produk;

use App\Http\Controllers\Controller;
use App\Models\Refund_produk;
use App\Models\User;
use Illuminate\Http\Request;

class RefundProdukController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $refund_produks = Refund_produk::where("user_id", auth()->user()->id)->select("id", "user_id", "transaksi_id", "alasan")->with('transaksi', 'user')->get();
        return response()->json([
            "data" => $refund_produks,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'transaksi_id' => 'required',
            'alasan' => 'required',
        ]);

        $refund_produks = new Refund_produk();
        $refund_produks->user_id = auth()->user()->id;
        $refund_produks->transaksi_id = $request->transaksi_id;
        $refund_produks->alasan = $request->alasan;

        // // saldo
        // $users = User::findOrFail($refund_produks->transaksi->keranjang->user_id);

        // if ($refund_produks->transaksi->metode_pembayaran == 'gakuniq wallet') {
        //     $users->saldo += $refund_produks->transaksi->total_harga;
        // }

        // $users->save();

        $refund_produks->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Refund Produks",
        ]);
    }
}
