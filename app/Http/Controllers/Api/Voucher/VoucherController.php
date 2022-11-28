<?php

namespace App\Http\Controllers\Api\Voucher;

use App\Http\Controllers\Controller;
use App\Models\Voucher;

class VoucherController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $vouchers = Voucher::select("id", "kode_voucher", "harga", "diskon", "label", "waktu_mulai", "waktu_berakhir", "status")->Where('status', 'aktif')->get();
        return response()->json([
            "data" => $vouchers,
            "status" => 200,
        ]);
    }

    public function index2()
    {
        $vouchers = Voucher::select("id", "kode_voucher", "harga", "diskon", "label", "waktu_mulai", "waktu_berakhir", "status")->where('label', 'gratis')->Where('status', 'aktif')->get();
        return response()->json([
            "data" => $vouchers,
            "status" => 200,
        ]);
    }

    // Menampilkan Data berdasakarkan id
    public function show($id)
    {
        $vouchers = Voucher::findOrFail($id);
        return response()->json([
            "data" => $vouchers,
            "status" => 200,
        ]);
    }
}
