<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city_id'
    ];

    public function subdis_id()
    {
        return $this->hasMany(Subdistrict::class, 'subdis_id');
    }

    public function city_id()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
