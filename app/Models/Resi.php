<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class Resi extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'admin_id',
        'pesanan_id',
        'on_booking',
        'on_pickup',
        'on_process',
        'on_transit',
        'on_packing',
        'on_survey',
        'on_hold',
        'canceled',
        'delivered'
    ];

    public function adminId()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
}
