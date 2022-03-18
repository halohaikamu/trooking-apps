<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Pricelist;

class CekOngkirController extends Controller
{
    public function index()
    {
        $getorigin = Pricelist::select('id', 'origin')->get();
        $getdestinasi = Pricelist::select('id', 'destinasi')->get();
        $getjenisbarang = Barang::select('id', 'jenis_barang')->get();
        $getberat = Pricelist::select('id', 'berat')->get();
        $getdimensi = Pricelist::select('id', 'dimensi')->get();
        $getharga = Pricelist::select('id', 'harga')->get();
        $getpricelist = Pricelist::all();
        return view('user.cek-ongkir.index', compact(
            'getorigin',
            'getdestinasi',
            'getjenisbarang',
            'getberat',
            'getdimensi',
            'getharga',
            'getpricelist'
        ));
    }
}
