<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
