<?php

namespace App\Http\Controllers\Api\keranjang;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use Symfony\Component\HttpFoundation\Request;

class KeranjangController extends Controller
{
    // Menampilkan Semua Data
    public function index(Request $request)
    {
        $keranjangs = Keranjang::where('user_id', auth()->user()->id)->select("id", "user_id", "produk_id", "ukuran", "warna", "jumlah", "total_harga")->with('user', 'produk')->get();
        $jumlah_keranjangs = Keranjang::where('user_id', auth()->user()->id)->count();
        return response()->json([
            "data" => $keranjangs,
            "jumlah_keranjang" => $jumlah_keranjangs,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'produk_id' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jumlah' => 'required',
        ]);


        // $cek_keranjangs = Keranjang::where('user_id',auth()->user()->id)->where('produk_id',$request->produk_id)->with('user', 'produk')->get();

        // if(empty($cek_keranjangs)){
            $keranjangs = new Keranjang();
            $keranjangs->user_id = auth()->user()->id;
            $keranjangs->produk_id = $request->produk_id;
            $keranjangs->ukuran = $request->ukuran;
            $keranjangs->warna = $request->warna;
            $keranjangs->jumlah = $request->jumlah;
            $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
            $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
            $keranjangs->save();
        // }
        //     if(!empty($cek_keranjangs)){
        //         $keranjangs = Keranjang::where('user_id',auth()->user()->id)->where('produk_id',$request->produk_id);
        //         // $cek_keranjangs->user_id = auth()->user()->id;
        //         // $keranjangs2 = new Keranjang();
        //         $keranjangs = Keranjang::findOrFail($keranjangs->id);
        //         $keranjangs->jumlah += $request->jumlah;
        //         $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        //         $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        //         $keranjangs->save();

        //         return response()->json([
        //             "status" => 201,
        //             "messaage" => "succesfully updated Keranjang",
        //         ]);
        //     }

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created Keranjang",
        ]);
    }

    // Mengedit Data
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            // 'user_id' => 'required',
            'produk_id' => 'required',
            'ukuran' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->user_id = auth()->user()->id;
        $keranjangs->produk_id = $request->produk_id;
        $keranjangs->ukuran = $request->ukuran;
        $keranjangs->jumlah = $request->jumlah;
        $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Kategori",
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $keranjangs = Keranjang::findMany($id);
        return response()->json([
            "data" => $keranjangs,
            "status" => 200,
        ]);
    }

    // Menghapus Data
    public function destroy($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted keranjang",
        ]);
    }
}
