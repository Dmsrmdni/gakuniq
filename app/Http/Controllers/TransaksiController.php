<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\Voucher;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::with('keranjang', 'voucher')->latest()->get();
        // $keranjangs = Keranjang::with('produk', 'user')->where('user_id', auth()->user()->id)->latest()->get();
        $total_transaksis = Transaksi::count();
        // $total_keranjangs = Keranjang::where('user_id', auth()->user()->id)->count();
        return view('admin.transaksi.index', compact('transaksis', 'total_transaksis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keranjangs = Keranjang::all();
        $vouchers = Voucher::where('status', 'aktif')->get();
        return view('admin.transaksi.create', compact('keranjangs', 'vouchers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'keranjang_id' => 'required',
            'metode_pembayaran' => 'required',
            'waktu_pemesanan' => 'required',
        ]);

        $transaksis = new Transaksi();
        $transaksis->kode_transaksi = $request->kode_transaksi;
        $transaksis->keranjang_id = $request->keranjang_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->waktu_pemesanan = $request->waktu_pemesanan;
        $transaksis->voucher_id = $request->voucher_id;
        if ($transaksis->voucher_id == '') {
            $diskon = 0;
        } else {
            $diskon = (($transaksis->voucher->diskon * $transaksis->keranjang->total_harga) / 100);
        }
        $transaksis->total_harga = $transaksis->keranjang->total_harga - $diskon;
        $transaksis->save();
        return redirect()
            ->route('transaksi.index')->with('toast_success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksis = Transaksi::findOrFail($id);
        $keranjangs = Keranjang::all();
        return view('admin.transaksi.show', compact('keranjangs', 'transaksis'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksis = Transaksi::findOrFail($id);
        $keranjangs = Keranjang::all();
        $vouchers = Voucher::where('status', 'aktif')->get();
        return view('admin.transaksi.edit', compact('keranjangs', 'transaksis', 'vouchers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'keranjang_id' => 'required',
            'metode_pembayaran' => 'required',
            'waktu_pemesanan' => 'required',
        ]);

        $transaksis = Transaksi::findOrFail($id);
        $transaksis->kode_transaksi = $request->kode_transaksi;
        $transaksis->keranjang_id = $request->keranjang_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->waktu_pemesanan = $request->waktu_pemesanan;
        $transaksis->voucher_id = $request->voucher_id;
        if ($transaksis->voucher_id == '') {
            $diskon = 0;
        } else {
            $diskon = (($transaksis->voucher->diskon * $transaksis->keranjang->total_harga) / 100);
        }
        $transaksis->total_harga = $transaksis->keranjang->total_harga - $diskon;
        $transaksis->save();
        return redirect()
            ->route('transaksi.index')->with('toast_success', 'Data has been edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksis = Transaksi::findOrFail($id);
        $transaksis->delete();
        return redirect()
            ->route('transaksi.index')->with('toast_error', 'Data has been deleted');

    }
}
