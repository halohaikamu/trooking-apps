<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tracking extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nomer_resi',
        'status',
        // 'created_by',
        // 'updated_by'
    ];

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'pesanan_id');
    }
}
