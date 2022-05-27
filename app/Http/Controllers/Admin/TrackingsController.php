<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resi;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class TrackingsController extends Controller
{
    public function rules($id = false)
    {
        return  [
            'id' => 'nullable',
            'admin_id' => 'nullable',
            'pesanan_id' => 'nullable',
            'on_booking' => 'required',
            'on_pickup' => 'nullable',
            'on_process' => 'nullable',
            'on_transit' => 'nullable',
            'on_packing' => 'nullable',
            'on_survey' => 'nullable',
            'on_hold' => 'nullable',
            'canceled' => 'nullable',
            'delivered' => 'nullable',
        ];
    }
    public function index()
    {
        $pesanan = Pesanan::all();
        $resi = Resi::all();
        return view('admin.trackings.index', compact('pesanan', 'resi'));
    }
    public function create()
    {
    }

    public function show()
    {
    }

    public function edit($id)
    {
        $pesanan =  Pesanan::all();
        $resi = Resi::find($id);
        return view('admin.trackings.edit', compact('pesanan', 'resi'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $data = $this->validate($request, $this->rules($resi));
        $input = $request->all();
        $resi->update($input);
        return redirect()->route('admin-trackings.index', compact('resi'))
            ->withSuccess(__('Resi updated successfully.'));
    }
}
