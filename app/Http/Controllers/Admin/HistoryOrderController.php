<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class HistoryOrderController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest()->when(request()->search, function ($pesanan) {
            $pesanan = $pesanan->where('name', 'like', '%' . request()->search . '%');
            $pesanan = $pesanan->where('username', 'like', '%' . request()->search . '%');
        })->paginate(10);

        return view('admin.history-order.index', compact('pesanan'));
    }

    public function show(Pesanan $pesanan)
    {
        return view('admin.history-order.show', compact('pesanan'));
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('admin-history-order.index', $pesanan)->with('success', 'History order deleted successfully');
    }
}
