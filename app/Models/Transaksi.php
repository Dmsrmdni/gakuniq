<?php

namespace App\Models;

use App\Models\User;
use App\Models\History;
use App\Models\Voucher;
use App\Models\Keranjang;
use App\Models\Voucher_user;
use App\Models\Review_produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }

    public function voucher_user()
    {
        return $this->belongsTo(Voucher_user::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function history()
    {
        return $this->hasMany(History::class);
    }

    public function review_produk()
    {
        return $this->hasOne(Review_produk::class);
    }
}
