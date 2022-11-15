<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\history\HistoryController;
use App\Http\Controllers\Api\kategori\KategoriController;
use App\Http\Controllers\Api\keranjang\KeranjangController;
use App\Http\Controllers\Api\Produk\ProdukController;
use App\Http\Controllers\Api\refund_produk\RefundProdukController;
use App\Http\Controllers\Api\reviewProduk\ReviewProdukController;
use App\Http\Controllers\Api\SubKategori\SubKategoriController;
use App\Http\Controllers\Api\TestingController;
use App\Http\Controllers\Api\topUp\TopUpController;
use App\Http\Controllers\Api\transaksi\TransaksiController;
use App\Http\Controllers\api\User\UserController;
use App\Http\Controllers\Api\VoucherUser\VoucherUserController;
use App\Http\Controllers\Api\Voucher\VoucherController;
use App\Http\Controllers\Api\wishlist\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test', [TestingController::class, 'test']);
// Route::post('test/create', [TestingController::class, 'create']);

// Authentikasi
Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout/{id}', LogoutController::class)->name('logout');
// EndAuthentikasi

// Kategori
Route::get('kategori', [KategoriController::class, 'index']);
Route::post('kategori/create', [KategoriController::class, 'store']);
Route::get('kategori/{id}', [KategoriController::class, 'show']);
Route::put('kategori/{id}/edit', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);
// endKategori

// SubKategori
Route::get('sub_kategori', [SubKategoriController::class, 'index']);
// endSubkategori

// produk
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/{id}', [ProdukController::class, 'show']);
Route::get('produk/kategori/{id}', [ProdukController::class, 'kategoriProduk']);
Route::get('produk/subkategori/{id}', [ProdukController::class, 'SubKategoriProduk']);
// endProduk

// voucher
Route::get('voucher', [VoucherController::class, 'index']);
Route::get('voucher/{id}', [VoucherController::class, 'show']);

// endvoucher

Route::middleware(['auth:api'])->group(function () {
    // Wishlist
    Route::get('wishlist', [WishlistController::class, 'index']);
    Route::post('wishlist/create', [WishlistController::class, 'store']);
    Route::delete('wishlist/{id}', [WishlistController::class, 'destroy']);
    Route::get('delete/wishlist', [WishlistController::class, 'destroyAll']);
    // endWishlist

    // Keranjang
    Route::get('keranjang', [KeranjangController::class, 'index']);
    Route::post('keranjang/create', [KeranjangController::class, 'store']);
    Route::get('keranjang/{id}', [KeranjangController::class, 'show']);
    Route::put('keranjang/{id}/edit', [KeranjangController::class, 'update']);
    Route::delete('keranjang/{id}', [KeranjangController::class, 'destroy']);
    Route::get('delete/keranjang', [KeranjangController::class, 'destroyAll']);
    // endKeranjang

    // voucherUser
    Route::get('voucher_user', [VoucherUserController::class, 'index']);
    Route::post('voucher_user/create', [VoucherUserController::class, 'store']);
    // endvoucherUser

    // topUp
    Route::get('top_up', [TopUpController::class, 'index']);
    Route::post('top_up/create', [TopUpController::class, 'store']);
    Route::delete('top_up/{id}', [TopUpController::class, 'destroy']);
    // endtopUp

    // transaksi
    Route::get('transaksi', [TransaksiController::class, 'index']);
    Route::post('transaksi/create', [TransaksiController::class, 'store']);
    Route::get('transaksi/{id}', [TransaksiController::class, 'show']);
    // endtransaksi

    // history
    Route::get('history', [HistoryController::class, 'index']);
    Route::get('history/{id}', [HistoryController::class, 'show']);
    Route::put('history/{id}/edit', [HistoryController::class, 'update']);
    Route::delete('history/{id}', [HistoryController::class, 'destroy']);
    // endhistory

    // reviewproduk
    Route::post('review_produk/create', [ReviewProdukController::class, 'store']);
    Route::get('review_produk/{id}', [ReviewProdukController::class, 'show']);
    // Route::delete('review_produk/{id}', [ReviewProdukController::class, 'destroy']);
    // endreviewproduk

    // reviewproduk
    Route::get('refund_produk', [RefundProdukController::class, 'index']);
    Route::post('refund_produk/create/{id}', [RefundProdukController::class, 'store']);
    // Route::get('refund_produk/{id}', [ReviewProdukController::class, 'show']);
    // endreviewproduk

    // user
    Route::get('user', [UserController::class, 'index']);
    Route::put('user/{id}/edit', [UserController::class, 'update']);
    Route::put('user/{id}/editstatus', [UserController::class, 'updateStatus']);
    // Route::delete('review_produk/{id}', [UserController::class, 'destroy']);
    // enduser
});

Route::get('review_produk/{id}', [ReviewProdukController::class, 'index']);
Route::get('all/user', [UserController::class, 'allData']);

// if(auth()->user()->jenis_kelamin){

// }
