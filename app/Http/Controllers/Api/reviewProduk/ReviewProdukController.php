<?php

namespace App\Http\Controllers\Api\reviewProduk;

use App\Http\Controllers\Controller;
use App\Models\Review_produk;
use Illuminate\Http\Request;

class ReviewProdukController extends Controller
{
    // Menampilkan Semua Data
    public function index($id)
    {
        $review_produks = Review_produk::where('produk_id', $id)->select("id", "user_id", "produk_id", "transaksi_id", "status", "komen")->with('transaksi','user')->get();
        return response()->json([
            "data" => $review_produks,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'transaksi_id' => 'required',
            'status' => 'required',
            'komen' => 'required',
        ]);

        $review_produks = new Review_produk();
        $review_produks->user_id = auth()->user()->id;
        $review_produks->transaksi_id = $request->transaksi_id;
        $review_produks->produk_id = $review_produks->transaksi->keranjang->produk->id;
        $review_produks->status = $request->status;
        $review_produks->komen = $request->komen;
        $review_produks->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Review Produks",
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $review_produks = Review_produk::findOrFail($id);
        return response()->json([
            "data" => $review_produks,
            "status" => 200,
        ]);
    }
}
