<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Refund_produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class RefundProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refund_produks = Refund_produk::with('transaksi', 'user')->latest()->get();
        return view('admin.refund_produk.index', compact('refund_produks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksis = Transaksi::where('status', 'proses')->get();
        $users = User::all();
        return view('admin.refund_produk.create', compact('transaksis', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'transaksi_id' => 'required',
            'alasan' => 'required',
        ]);

        $refund_produks = new Refund_produk();
        $refund_produks->user_id = $request->user_id;
        $refund_produks->transaksi_id = $request->transaksi_id;
        $refund_produks->alasan = $request->alasan;
        $transaksis = Transaksi::findOrFail($refund_produks->transaksi_id);
        $transaksis->status = "pengajuan refund";
        $transaksis->save();

        $refund_produks->save();
        return redirect()
            ->route('refund_produk.index')->with('toast_success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refund_produk  $refund_produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refund_produks = Refund_produk::findOrFail($id);
        return view('admin.refund_produk.show', compact('refund_produks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refund_produk  $refund_produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $refund_produks = Refund_Produk::findOrFail($id);
        return view('admin.refund_produk.index', compact('refund_produks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refund_produk  $refund_produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required',
        ]);

        $refund_produks = Refund_Produk::findOrFail($id);
        $refund_produks->status = $request->status;

        if ($refund_produks->status == 'di setujui') {

            $transaksis = Transaksi::findOrFail($refund_produks->transaksi_id);
            $transaksis->status = "dikembalikan";
            $transaksis->save();

            // saldo

            if ($refund_produks->transaksi->metode_pembayaran == 'gakuniq wallet') {
                $users = User::findOrFail($refund_produks->transaksi->keranjang->user_id);
                $users->saldo += $refund_produks->transaksi->total_harga;
                $users->save();
            }
        }

        if ($refund_produks->status == 'di tolak') {

            $transaksis = Transaksi::findOrFail($refund_produks->transaksi_id);
            $transaksis->status = "proses";
            $transaksis->save();
        }

        $refund_produks->save();
        return redirect()
            ->route('refund_produk.index')->with('toast_info', 'Data has been edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refund_produk  $refund_produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refund_produks = Refund_Produk::findOrFail($id);
        $refund_produks->delete();
        return redirect()
            ->route('refund_produk.index')->with('toast_error', 'Data has been deleted');

    }
}
