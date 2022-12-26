<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Keranjang;
use App\Models\Refund_produk;
use App\Models\Review_produk;
use App\Models\TopUp;
use App\Models\Transaksi;
use App\Models\Voucher_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    public function image()
    {
        if ($this->profile && file_exists(public_path('images/users/' . $this->profile))) {
            return asset('images/users/' . $this->profile);
        } else {
            return asset('images/profile.jpeg');
        }
    }

    public function deleteImage()
    {
        if ($this->profile && file_exists(public_path('images/users/' . $this->profile))) {
            return unlink(public_path('images/users/' . $this->profile));
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile',
        'nama_depan',
        'nama_belakang',
        'no_telepon',
        'username',
        'email',
        'password',
        'tanggal_lahir',
        'jenis_kelamin',
        'referensi',
        'label_alamat',
        'kota_kecamatan',
        'alamat_lengkap',
    ];

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function topup()
    {
        return $this->hasMany(TopUp::class);
    }

    public function voucher_user()
    {
        return $this->hasMany(Voucher_user::class);
    }

    public function review_produk()
    {
        return $this->hasMany(Review_produk::class);
    }

    public function refund_produk()
    {
        return $this->hasMany(Refund_produk::class);
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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
