<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Sub_kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::with('sub_kategori')->latest()->get();
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_kategoris = Sub_kategori::all();
        $kategoris = kategori::all();
        return view('admin.produk.create', compact('sub_kategoris', 'kategoris'));
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
            'sub_kategori_id' => 'required',
            'nama_produk' => 'required',
            'hpp' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        $produks = new Produk();
        $produks->sub_kategori_id = $request->sub_kategori_id;
        $produks->kategori_id = $produks->sub_kategori->kategori_id;
        $produks->nama_produk = $request->nama_produk;
        $produks->hpp = $request->hpp;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->diskon = $request->diskon;
        $produks->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar_produk1')) {
            $produks->deleteImage1(); //menghapus image sebelum di update melalui method deleteImage di model
            $image1 = $request->file('gambar_produk1');
            $name1 = rand(1000, 9999) . $image1->getClientOriginalName();
            $image1->move('images/gambar_produk1/', $name1);
            $produks->gambar_produk1 = 'images/gambar_produk1/' . $name1;
        }

        if ($request->hasFile('gambar_produk2')) {
            $produks->deleteImage2(); //menghapus image sebelum di update melalui method deleteImage di model
            $image2 = $request->file('gambar_produk2');
            $name2 = rand(1000, 9999) . $image2->getClientOriginalName();
            $image2->move('images/gambar_produk2/', $name2);
            $produks->gambar_produk2 = 'images/gambar_produk2/' . $name2;
        }

        if ($request->hasFile('gambar_produk3')) {
            $produks->deleteImage3(); //menghapus image sebelum di update melalui method deleteImage di model
            $image3 = $request->file('gambar_produk3');
            $name3 = rand(1000, 9999) . $image3->getClientOriginalName();
            $image3->move('images/gambar_produk3/', $name3);
            $produks->gambar_produk3 = 'images/gambar_produk3/' . $name3;
        }

        $produks->save();
        return redirect()
            ->route('produk.index')->with('toast_success', 'Data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produks = Produk::findOrFail($id);
        return view('admin.produk.show', compact('produks'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = Produk::findOrFail($id);
        $kategoris = kategori::all();
        $sub_kategoris = Sub_kategori::all();
        return view('admin.produk.edit', compact('produks', 'kategoris', 'sub_kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'sub_kategori_id' => 'required',
            'nama_produk' => 'required',
            'hpp' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        $produks = Produk::findOrFail($id);
        $produks->sub_kategori_id = $request->sub_kategori_id;
        $produks->kategori_id = $produks->sub_kategori->kategori_id;
        $produks->nama_produk = $request->nama_produk;
        $produks->hpp = $request->hpp;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->diskon = $request->diskon;
        $produks->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar_produk1')) {
            $produks->deleteImage1(); //menghapus image sebelum di update melalui method deleteImage di model
            $image1 = $request->file('gambar_produk1');
            $name1 = rand(1000, 9999) . $image1->getClientOriginalName();
            $image1->move('images/gambar_produk1/', $name1);
            $produks->gambar_produk1 = 'images/gambar_produk1/' . $name1;
        }

        if ($request->hasFile('gambar_produk2')) {
            $produks->deleteImage2(); //menghapus image sebelum di update melalui method deleteImage di model
            $image2 = $request->file('gambar_produk2');
            $name2 = rand(1000, 9999) . $image2->getClientOriginalName();
            $image2->move('images/gambar_produk2/', $name2);
            $produks->gambar_produk2 = 'images/gambar_produk2/' . $name2;
        }

        if ($request->hasFile('gambar_produk3')) {
            $produks->deleteImage3(); //menghapus image sebelum di update melalui method deleteImage di model
            $image3 = $request->file('gambar_produk3');
            $name3 = rand(1000, 9999) . $image3->getClientOriginalName();
            $image3->move('images/gambar_produk3/', $name3);
            $produks->gambar_produk3 = 'images/gambar_produk3/' . $name3;
        }
        $produks->save();
        return redirect()
            ->route('produk.index')->with('toast_success', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produk::findOrFail($id);
        $produks->delete();
        $produks->deleteImage1();
        $produks->deleteImage2();
        $produks->deleteImage3();
        return redirect()
            ->route('produk.index')->with('toast_success', 'Data has been deleted');

    }
}
