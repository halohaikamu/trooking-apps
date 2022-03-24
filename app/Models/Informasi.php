<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;

class Informasi extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
    protected $fillable = [
        'jenis_informasi',
        'isi',
    ];
}
