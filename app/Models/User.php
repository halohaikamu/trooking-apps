<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $guard_name = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'social_id',
        'social_type',
        'last_login_at',
        'last_login_ip',
        'browser',
        'prov_id',
        'city_id',
        'dis_id',
        'subdis_id',
        'voucher_id',
        // 'created_by',
        // 'updated_by'
    ];

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

    public function prov_id()
    {
        return $this->belongsTo(Province::class, 'prov_id');
    }

    public function city_id()
    {
        return $this->belongsTo(Citie::class, 'city_id');
    }

    public function dis_id()
    {
        return $this->belongsTo(District::class, 'dis_id');
    }

    public function subdis_id()
    {
        return $this->belongsTo(Subdistrict::class, 'subdis_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'pesanan_id');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }
}
