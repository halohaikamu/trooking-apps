<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class Pricelist extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'origin',
        'destinasi',
        'berat',
        'harga',
        'dimensi',
    ];

    public function originId()
    {
        return $this->belongsTo(City::class, 'origin');
    }

    public function destinasiId()
    {
        return $this->belongsTo(City::class, 'destinasi');
    }

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'pesanan_id');
    }
}
