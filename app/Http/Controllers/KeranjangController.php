<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjangs = Keranjang::where('status', 'keranjang')->with('produk', 'user')->latest()->get();
        $total_keranjangs = Keranjang::where('status', 'keranjang')->count();
        return view('admin.keranjang.index', compact('keranjangs', 'total_keranjangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produks = Produk::all();
        $users = User::where('role', 'costumer')->get();
        return view('admin.keranjang.create', compact('produks', 'users'));
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
            'user_id' => 'required',
            'produk_id' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = new Keranjang();
        $keranjangs->user_id = $request->user_id;
        $keranjangs->produk_id = $request->produk_id;
        $keranjangs->ukuran = $request->ukuran;
        $keranjangs->warna = $request->warna;
        $keranjangs->jumlah = $request->jumlah;
        $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('toast_success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $produks = Produk::all();
        $users = User::all();
        return view('admin.keranjang.edit', compact('keranjangs', 'produks', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'ukuran' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->user_id = $request->user_id;
        $keranjangs->produk_id = $request->produk_id;
        $keranjangs->ukuran = $request->ukuran;
        $keranjangs->jumlah = $request->jumlah;
        $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('toast_info', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->delete();
        return redirect()
            ->route('keranjang.index')->with('toast_error', 'Data has been deleted');

    }

    public function destroyAll()
    {
        DB::table('keranjangs')->where('status', 'keranjang')->delete();
        return redirect()
            ->route('keranjang.index')->with('toast_error', 'All Data has been deleted');
    }
}
