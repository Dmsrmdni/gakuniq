<?php

namespace App\Http\Controllers\Api\Produk;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan Semua Data
    public function index(Request $request)
    {
        $produks = Produk::with('sub_kategori')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.id')->
            select("produks.id", "kategori_id", "sub_kategori_id", "nama_produk", "harga", "stok", "diskon", "deskripsi", "gambar_produk1", "gambar_produk2", "gambar_produk3", 'kategoris.name')->get();
        return response()->json([
            "data" => $produks,
            "status" => 200,
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $produks = Produk::findOrFail($id);
        return response()->json([
            "data" => $produks,
            "status" => 200,
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function kategoriProduk($id)
    {
        $produks = Produk::select("id", "kategori_id", "sub_kategori_id", "nama_produk", "harga", "stok", "diskon", "deskripsi", "gambar_produk1", "gambar_produk2", "gambar_produk3")->where('kategori_id', $id)->with('sub_kategori')->get();
        return response()->json([
            "data" => $produks,
            "status" => 200,
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function SubKategoriProduk($id)
    {
        $produks = Produk::select("id", "kategori_id", "sub_kategori_id", "nama_produk", "harga", "stok", "diskon", "deskripsi", "gambar_produk1", "gambar_produk2", "gambar_produk3")->where('sub_kategori_id', $id)->with('sub_kategori')->get();
        return response()->json([
            "data" => $produks,
            "status" => 200,
        ]);
    }

    public function Referensi()
    {
        $produks = Produk::select("id", "kategori_id", "sub_kategori_id", "nama_produk", "harga", "stok", "diskon", "deskripsi", "gambar_produk1", "gambar_produk2", "gambar_produk3")->where('sub_kategori_id', auth()->user()->referensi)->with('sub_kategori')->get();
        return response()->json([
            "data" => $produks,
            "status" => 200,
        ]);
    }
}
