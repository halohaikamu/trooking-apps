<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Informasi;

class InformasiUserController extends Controller
{
    public function index()
    {
        $informasi = Informasi::latest()->when(request()->search, function($informasi) {
            $informasi = $informasi->where('jenis_informasi', 'like', '%'. request()->search . '%');
        })->paginate(10);

        return view('user.informasi.index', compact('informasi'));
    }

    public function show(Informasi $informasi)
    {
        return view('user.informasi.show',compact('informasi'));
    }
}
