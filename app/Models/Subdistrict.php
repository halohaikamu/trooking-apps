<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dis_id',
    ];

    public function dis_id()
    {
        return $this->belongsTo(District::class, 'dis_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
