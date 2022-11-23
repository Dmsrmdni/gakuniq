<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RefundProdukController;
use App\Http\Controllers\ReviewProdukController;
use App\Http\Controllers\RiwayatProdukController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\VoucherUserController;
use App\Http\Controllers\WishlistController;
use App\Models\Sub_kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class)->except('show', 'create', 'edit');
    Route::resource('user', UserController::class)->except('show', 'create', 'edit');
    Route::resource('kategori', KategoriController::class)->except('show');
    Route::resource('sub_kategori', SubKategoriController::class)->except('show');
    Route::resource('produk', ProdukController::class);
    Route::resource('keranjang', KeranjangController::class)->except('show');
    Route::get('keranjang/delete', [KeranjangController::class, 'destroyAll']);
    Route::resource('wishlist', WishlistController::class)->except('show');
    Route::get('wishlist/delete', [WishlistController::class, 'destroyAll']);
    Route::resource('delete', DeleteController::class);
    Route::resource('review_produk', ReviewProdukController::class)->except('edit');
    Route::resource('refund_produk', RefundProdukController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::get('pdf/{id}', [TransaksiController::class, 'pdf']);
    Route::resource('history', HistoryController::class);
    Route::resource('voucher', VoucherController::class);
    Route::resource('voucher_user', VoucherUserController::class);
    Route::resource('riwayat_produk', RiwayatProdukController::class)->except('show', 'edit');
    Route::resource('top_up', TopUpController::class)->except('show', 'edit');
    Route::resource('chat', ChatController::class)->except('show', 'edit');
});

Route::get('getSub_kategori/{id}', function ($id) {
    $sub_kategoris = Sub_kategori::where('kategori_id', $id)->get();
    return response()->json($sub_kategoris);
});

Route::get('/send-event', function () {
    broadcast(new \App\Events\HelloEvent());
});
