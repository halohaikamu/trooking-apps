<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class DataVendor extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'vendor_id',
        'whatsapp',
        'nama_driver',
        'nopol_driver',
        'coverage_area',
        'foto_ktp',
        'foto_unit',
        'foto_sim',
        'foto_stnk'
    ];

    public function vendor_id()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function coverage_area()
    {
        return $this->belongsTo(City::class, 'coverage_area');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dataVendor) {
            $dataVendor->{$dataVendor->getKeyName()} = (string) Str::uuid();
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
