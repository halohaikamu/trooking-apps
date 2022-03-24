<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class Pembayaran extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'endpoint',
        'jenis_pembayaran',
        'harga',
        'eksternal_id',
        'nama',
        'invoice',
    ];

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'pesanan_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pembayaran) {
            $pembayaran->{$pembayaran->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
