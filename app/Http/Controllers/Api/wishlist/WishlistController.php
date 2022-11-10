<?php

namespace App\Http\Controllers\Api\wishlist;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    // Menampilkan Semua Data
    public function index(Request $request)
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->select("id", "user_id", "produk_id")->with('user', 'produk')->get();
        $jumlah_wishlists = Wishlist::where('user_id', auth()->user()->id)->count();
        return response()->json([
            "data" => $wishlists,
            "jumlah_wishlist" => $jumlah_wishlists,
            "status" => 200,
        ]);
    }

    // Membuat Data Baru
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            // 'user_id' => 'required',
            'produk_id' => 'required',
        ]);

        $wishlists = new Wishlist();
        $wishlists->user_id = auth()->guard('api')->user()->id;
        $wishlists->produk_id = $request->produk_id;
        $wishlists->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully created wishlist",
        ]);
    }

    // Menghapus Data
    public function destroy($id)
    {
        $wishlists = Wishlist::findOrFail($id);
        $wishlists->delete();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted wishlist",
        ]);
    }

    public function destroyAll()
    {
        DB::table('wishlists')->where('user_id', auth()->user()->id)->delete();
        return response()->json([
            "status" => 201,
            "messaage" => "succesfully deleted All wishlist",
        ]);
    }
}
