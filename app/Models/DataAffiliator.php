<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class DataAffiliator extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'jenis_barang',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($barang) {
            $barang->{$barang->getKeyName()} = (string) Str::uuid();
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
