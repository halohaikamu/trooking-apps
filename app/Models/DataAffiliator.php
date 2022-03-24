<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class DataAffiliator extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'affiliator_id',
        'whatsapp',
        'foto_ktp',
        'foto_npwp'
    ];

    public function affiliator_id()
    {
        return $this->belongsTo(Affiliator::class, 'affiliator_id');
    }
}
