<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricelist;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index()
    {
        $pricelist = Pricelist::latest()->when(request()->search, function ($pricelist) {
            $pricelist = $pricelist->where('origin', 'like', '%' . request()->search . '%');
        })->paginate(10);

        return view('admin.pricelist.index', compact('pricelist'));
    }

    public function show(Pricelist $pricelist)
    {
        return view('admin.pricelist.show', compact('pricelist'));
    }
}
