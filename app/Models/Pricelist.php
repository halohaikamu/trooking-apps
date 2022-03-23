<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Pricelist extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'origin',
        'destinasi',
        'berat',
        'harga',
        'dimensi',
        // 'created_by',
        // 'updated_by'
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
