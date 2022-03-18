<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pricelist;
use App\Models\Voucher;
use App\Models\Pembayaran;
use App\Models\Tracking;
use Illuminate\Http\Request;

class PesananUserController extends Controller
{
    public function rules($id = false)
    {
        return  [
            'name_id' => 'nullable',
            'username_id' => 'nullable',
            'origin' => 'required',
            'destinasi' => 'required',
            'jenis_barang_id' => 'required',
            'berat_id' => 'nullable',
            'dimensi_id' => 'nullable',
            'harga_id' => 'required',
            'note' => 'required',
            'packing' => 'required',
            'gambar' => 'required',
            'voucher_id' => 'nullable',
            'jenis_pembayaran_id' => 'required',
            'invoice_id' => 'nullable',
            'nomer_resi_id' => 'nullable',
            'penjemputan' => 'nullable',
            'pengantaran' => 'nullable',
        ];
    }

    public function create()
    {
        $getname = User::select('id', 'name')->get();
        $getusername = User::select('id', 'username')->get();
        $getorigin = Pricelist::select('id', 'origin')->get();
        $getdestinasi = Pricelist::select('id', 'destinasi')->get();
        $getjenisbarang = Barang::select('id', 'jenis_barang')->get();
        $getberat = Pricelist::select('id', 'berat')->get();
        $getdimensi = Pricelist::select('id', 'dimensi')->get();
        $getharga = Pricelist::select('id', 'harga')->get();
        $getvoucher = Voucher::select('id', 'voucher')->get();
        $getjenispembayaran = Pembayaran::select('id', 'jenis_pembayaran')->get();
        $getinvoice = Pembayaran::select('id', 'invoice')->get();
        $getnomerresi = Tracking::select('id', 'nomer_resi')->get();
        $getpricelist = Pricelist::all();
        return view('user.pesanan.create', compact(
            'getname',
            'getusername',
            'getorigin',
            'getdestinasi',
            'getjenisbarang',
            'getberat',
            'getdimensi',
            'getharga',
            'getvoucher',
            'getjenispembayaran',
            'getnomerresi',
            'getinvoice',
            'getpricelist'
        ));

    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/pesanan';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        Pesanan::create($input);
        return redirect()->route('history-order.index')
            ->withSuccess(__('Pesanan created successfully.'));
    }
}
