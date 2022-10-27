<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Keranjang;
use App\Models\TopUp;
use App\Models\Voucher_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'no_telepon',
        'email',
        'label_alamat',
        'kota/kecamatan',
        'alamat_lengkap',
        'password',
    ];

    public function keranjang()
    {
        return $this->hasOne(Keranjang::class);
    }

    public function topup()
    {
        return $this->hasMany(TopUp::class);
    }

    public function voucher_user()
    {
        return $this->hasMany(Voucher_user::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
