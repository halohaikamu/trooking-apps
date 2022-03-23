<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Voucher extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'voucher',
        // 'created_by',
        // 'updated_by'
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'admin_id');
    }

    public function affiliate()
    {
        return $this->hasOne(Affiliate::class, 'affiliate_id');
    }

    public function agen()
    {
        return $this->hasOne(Agen::class, 'agen_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'vendor_id');
    }

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'pesanan_id');
    }
}
