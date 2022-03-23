<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Pesanan extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name_id',
        'username_id',
        'origin',
        'destinasi',
        'jenis_barang_id',
        'berat_id',
        'dimensi_id',
        'harga_id',
        'note',
        'packing',
        'gambar',
        'voucher_id',
        'jenis_pembayaran_id',
        'invoice_id',
        'nomer_resi_id',
        'penjemputan',
        'pengantaran',
        // 'created_by',
        // 'updated_by'
    ];

    public function nameId()
    {
        return $this->belongsTo(User::class, 'name_id');
    }

    public function usernameId()
    {
        return $this->belongsTo(User::class, 'username_id');
    }

    public function originId()
    {
        return $this->belongsTo(Pricelist::class, 'origin');
    }

    public function destinasiId()
    {
        return $this->belongsTo(Pricelist::class, 'destinasi');
    }

    public function jenisBarangId()
    {
        return $this->belongsTo(Barang::class, 'jenis_barang_id');
    }

    public function beratId()
    {
        return $this->belongsTo(Pricelist::class, 'berat_id');
    }

    public function dimensiId()
    {
        return $this->belongsTo(Pricelist::class, 'dimensi_id');
    }

    public function hargaId()
    {
        return $this->belongsTo(Pricelist::class, 'harga_id');
    }

    public function voucherId()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }

    public function jenisPembayaranId()
    {
        return $this->belongsTo(Pembayaran::class, 'jenis_pembayaran_id');
    }

    public function invoiceId()
    {
        return $this->belongsTo(Pembayaran::class, 'invoice_id');
    }

    public function nomerResiId()
    {
        return $this->belongsTo(Tracking::class, 'nomer_resi_id');
    }
}
