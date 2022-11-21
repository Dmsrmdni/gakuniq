<?php

namespace App\Http\Controllers\Api\history;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $histories = History::where('nama_pembeli', auth()->user()->username)->select("id", "gambar_produk", "kode_transaksi", "nama_pembeli", "nama_produk", "jumlah", "total_harga", "waktu_pemesanan", "status")->with("transaksi")->get();
        return response()->json([
            "data" => $histories,
            "status" => 200,
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $histories = History::findOrFail($id);
        return response()->json([
            "data" => $histories,
            "status" => 200,
        ]);
    }

    // Mengedit Data
    public function update(Request $request, $id)
    {

        $histories = History::findOrFail($id);
        $histories->status = $request->status;

        $histories->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Users",
        ]);
    }

    // Menghapus Data
    public function destroy($id)
    {
        $histories = History::findOrFail($id);
        $histories->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted History",
        ]);
    }
}
