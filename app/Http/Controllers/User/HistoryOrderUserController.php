<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class HistoryOrderUserController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest()->when(request()->search, function ($pesanan) {
            $pesanan = $pesanan->where('name', 'like', '%' . request()->search . '%');
            $pesanan = $pesanan->where('username', 'like', '%' . request()->search . '%');
        })->paginate(10);

        return view('user.history-order.index', compact('pesanan'));
    }

    public function show(Pesanan $pesanan)
    {
        return view('user.history-order.show', compact('pesanan'));
    }
}
