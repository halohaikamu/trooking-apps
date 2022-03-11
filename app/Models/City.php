<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prov_id'
    ];

    public function dis_id()
    {
        return $this->hasMany(District::class, 'dis_id');
    }

    public function prov_id()
    {
        return $this->belongsTo(Province::class, 'prov_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'pesanan_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
