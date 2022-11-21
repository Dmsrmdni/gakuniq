<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    public function test()
    {
        // sel/* ect("id", "kode_voucher")
        // $vouchers = Voucher::get();
        // return response()->json([
        //     "data" => $vouchers,
        //     "status" => 200,
        // ]); */

        return "Hello World";
    }

//     public function create(Request $request)
//     {
//         //validasi
//         $validated = $request->validate([
//             'kode_voucher' => 'required|unique:vouchers',
//             'harga' => 'required',
//             'diskon' => 'required',
//             'waktu_mulai' => 'required',
//             'waktu_berakhir' => 'required',
//         ]);

//         // $vouchers = new Voucher();
//         // $vouchers->kode_voucher = $request->kode_voucher;
//         // $vouchers->harga = $request->harga;
// // if ($vouchers->harga > 0) {
// //     $vouchers->label = 'berbayar';
// // } else {
// //     $vouchers->label = 'gratis';
// // }
// // $vouchers->diskon = $request->diskon;
// // $vouchers->waktu_mulai = $request->waktu_mulai;
// // $vouchers->waktu_berakhir = $request->waktu_berakhir;

// // if ($vouchers->waktu_mulai > $vouchers->waktu_berakhir) {
// //     $status = 'expired';
// // } else {
// //     $status = 'aktif';
// // }
//         // $vouchers->status = $status
//         // $vouchers->save();

//         Voucher::create([
//             "kode_voucher" => $request['kode_voucher'],
//             "harga" => $request['harga'],
//             "diskon" => $request['diskon'],
//             "waktu_mulai" => $request['waktu_mulai'],
//             "waktu_berakhir" => $request['waktu_berakhir'],
//         ]);
//         return response()->json([
//             "status" => 201,
//             "messaage" => "succesfully created voucher",
//         ]);
//     }

//     public function update(Request $request)
//     {
//         //validasi
//         $validated = $request->validate([
//             'kode_voucher' => 'required|unique:vouchers',
//             'harga' => 'required',
//             'diskon' => 'required',
//             'waktu_mulai' => 'required',
//             'waktu_berakhir' => 'required',
//         ]);

//         // $vouchers = new Voucher();
//         // $vouchers->kode_voucher = $request->kode_voucher;
//         // $vouchers->harga = $request->harga;
// // if ($vouchers->harga > 0) {
// //     $vouchers->label = 'berbayar';
// // } else {
// //     $vouchers->label = 'gratis';
// // }
// // $vouchers->diskon = $request->diskon;
// // $vouchers->waktu_mulai = $request->waktu_mulai;
// // $vouchers->waktu_berakhir = $request->waktu_berakhir;

// // if ($vouchers->waktu_mulai > $vouchers->waktu_berakhir) {
// //     $status = 'expired';
// // } else {
// //     $status = 'aktif';
// // }
//         // $vouchers->status = $status
//         // $vouchers->save();

//         // Voucher::create([
//         //     "kode_voucher" => $request['kode_voucher'],
//         //     "harga" => $request['harga'],
//         //     "diskon" => $request['diskon'],
//         //     "waktu_mulai" => $request['waktu_mulai'],
//         //     "waktu_berakhir" => $request['waktu_berakhir'],
//         // ]);
//         // return response()->json([
//         //     "status" => 201,
//         //     "messaage" => "succesfully created voucher",
//         // ]);
//     }
}
