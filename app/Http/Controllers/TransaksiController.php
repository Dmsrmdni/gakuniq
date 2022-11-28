<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Voucher_user;
use DB;
use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::with('keranjang', 'voucher', 'voucher_user', 'user')
            ->latest()
            ->get();

        return view('admin.transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role', 'costumer')->get();
        $keranjangs = Keranjang::where('status', 'keranjang')->get();
        $voucher_users = Voucher_user::all();
        $vouchers = Voucher::where('status', 'aktif')
            ->where('label', 'gratis')
            ->get();
        return view('admin.transaksi.create', compact('keranjangs', 'vouchers', 'voucher_users', 'users'));
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
            'kode_transaksi' => 'unique:transaksis',
        ]);

        $transaksis = new Transaksi();
        $kode_transaksis = DB::table('transaksis')->select(DB::raw('MAX(RIGHT(kode_transaksi,3)) as kode'));
        if ($kode_transaksis->count() > 0) {
            foreach ($kode_transaksis->get() as $kode_transaksi) {
                $x = ((int) $kode_transaksi->kode) + 1;
                $kode = sprintf('%03s', $x);
            }
        } else {
            $kode = '001';
        }
        $transaksis->kode_transaksi = 'GNQ-' . date('dmy') . $kode;
        $transaksis->user_id = $request->user_id;
        $transaksis->keranjang_id = $request->keranjang_id;
        $transaksis->produk_id = $transaksis->keranjang->produk_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->waktu_pemesanan = $request->waktu_pemesanan;
        $transaksis->voucher_id = $request->voucher_id;
        // $transaksis->status = $request->status;

        if ($transaksis->voucher_id == '') {
            $diskon = 0;
        } else {
            $diskon = ($transaksis->voucher->diskon * $transaksis->keranjang->total_harga) / 100;
            // $voucher_user = Voucher_user::where('voucher_id', $transaksis->voucher_id)->get();
            // $voucher_user = Voucher_user::join('vouchers', 'voucher_users.voucher_id', '=', 'vouchers.id')->
            //     select("voucher_users.id")->get();

            // $voucher_users = Voucher_user::findOrFail($voucher_user->id);
            // $voucher_users->status = 'digunakan';
            // $voucher_users->save();
        }

        $transaksis->total_harga = $transaksis->keranjang->total_harga - $diskon;

        // stok produk
        $produks = Produk::findOrFail($transaksis->keranjang->produk_id);
        if ($produks->stok < $transaksis->keranjang->jumlah) {
            return redirect()
                ->route('transaksi.create')
                ->with('toast_error', 'Stok Kurang');
        } else {
            $produks->stok -= $transaksis->keranjang->jumlah;
        }
        $produks->save();

        // score
        $users = User::findOrFail($transaksis->keranjang->user_id);
        if ($transaksis->total_harga >= 100000 && $transaksis->total_harga < 199999) {
            $users->score += 1000;
        } elseif ($transaksis->total_harga >= 200000 && $transaksis->total_harga < 299999) {
            $users->score += 2000;
        } elseif ($transaksis->total_harga >= 300000 && $transaksis->total_harga < 399999) {
            $users->score += 3000;
        } elseif ($transaksis->total_harga >= 400000) {
            $users->score += 5000;
        }
        $users->save();

        // saldo
        if ($transaksis->metode_pembayaran == 'gakuniq wallet') {
            if ($users->saldo < $transaksis->total_harga) {
                return redirect()
                    ->route('transaksi.create')
                    ->with('toast_error', 'Saldo Kurang');
            } else {
                $users->saldo -= $transaksis->total_harga;
            }
            $users->save();
        }

        // History
        // $histories = new History();
        // $histories->gambar_produk = $transaksis->keranjang->produk->gambar_produk1;
        // $histories->kode_transaksi = $transaksis->kode_transaksi;
        // $histories->nama_pembeli = $transaksis->keranjang->user->username;
        // $histories->nama_produk = $transaksis->keranjang->produk->nama_produk;
        // $histories->jumlah = $transaksis->keranjang->jumlah;
        // $histories->total_harga = $transaksis->total_harga;
        // $histories->waktu_pemesanan = $transaksis->waktu_pemesanan;
        // $histories->save();

        // keranjang
        $keranjangs = keranjang::findOrFail($transaksis->keranjang_id);
        $keranjangs->status = 'checkout';
        $keranjangs->save();

        $transaksis->save();

        return redirect()
            ->route('transaksi.index')
            ->with('toast_success', 'Data has been added');
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
        // $users = User::all();
        // $keranjangs = Keranjang::all();
        return view('admin.transaksi.show', compact('transaksis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $transaksis = Transaksi::findOrFail($id);
        $keranjangs = Keranjang::all();
        $vouchers = Voucher::where('status', 'aktif')->get();
        return view('admin.transaksi.edit', compact('keranjangs', 'transaksis', 'vouchers', 'users'));
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
        $transaksis = Transaksi::findOrFail($id);

        //validasi
        $rules = [
            'keranjang_id' => 'required',
            'metode_pembayaran' => 'required',
            'waktu_pemesanan' => 'required',
        ];

        if ($request->kode_transaksi != $transaksis->kode_transaksi) {
            $rules['kode_transaksi'] = 'unique:transaksis';
        }
        $validasiData = $request->validate($rules);

        $transaksis->kode_transaksi = $request->kode_transaksi;
        $transaksis->user_id = $request->user_id;
        $transaksis->keranjang_id = $request->keranjang_id;
        $transaksis->metode_pembayaran = $request->metode_pembayaran;
        $transaksis->waktu_pemesanan = $request->waktu_pemesanan;
        $transaksis->voucher_id = $request->voucher_id;
        if ($transaksis->voucher_id == '') {
            $diskon = 0;
        } else {
            $diskon = ($transaksis->voucher->diskon * $transaksis->keranjang->total_harga) / 100;
        }
        $transaksis->total_harga = $transaksis->keranjang->total_harga - $diskon;
        $transaksis->save();
        return redirect()
            ->route('transaksi.index')
            ->with('toast_success', 'Data has been edited');
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
            ->route('transaksi.index')
            ->with('toast_error', 'Data has been deleted');
    }

    public function pdf($id)
    {
        $transaksis = Transaksi::findOrFail($id);

        $pdf = PDF::loadView('pdf_download', compact('transaksis'));

        return $pdf->download("Detail Transaksi {$transaksis->kode_transaksi}.pdf");
    }
}
