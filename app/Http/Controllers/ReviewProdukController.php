<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review_produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review_produks = Review_produk::with('transaksi', 'user')->latest()->get();
        return view('admin.review_produk.index', compact('review_produks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksis = Transaksi::all();
        $users = User::where('role', 'costumer')->get();
        return view('admin.review_produk.create', compact('transaksis', 'users'));

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
            'transaksi_id' => 'required',
            'rating' => 'required',
            'komen' => 'required',
        ]);

        $review_produks = new Review_produk();
        $review_produks->user_id = $request->user_id;
        $review_produks->transaksi_id = $request->transaksi_id;
        $review_produks->produk_id = $review_produks->transaksi->keranjang->produk->id;
        $review_produks->rating = $request->rating;
        $review_produks->komen = $request->komen;
        $review_produks->save();
        return redirect()
            ->route('review_produk.index')->with('toast_success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review_produk  $review_produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review_produks = Review_Produk::findOrFail($id);
        return view('admin.review_produk.show', compact('review_produks'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review_produk  $review_produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review_produk  $review_produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review_produk  $review_produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review_produks = Review_Produk::findOrFail($id);
        $review_produks->delete();
        return redirect()
            ->route('review_produk.index')->with('toast_success', 'Data has been deleted');

    }
}
