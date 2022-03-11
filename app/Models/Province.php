<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'locationid',
        'status',
    ];

    public function city_id()
    {
        return $this->hasMany(City::class, 'city_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
