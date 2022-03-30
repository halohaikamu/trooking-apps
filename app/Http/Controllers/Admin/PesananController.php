<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pricelist;
use App\Models\Voucher;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Str;

class PesananController extends Controller
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
            'nomer_resi' => 'nullable',
            'penjemputan' => 'nullable',
            'pengantaran' => 'nullable',
        ];
    }

    public function index()
    {
        $pesanan = Pesanan::latest()->when(request()->search, function ($pesanan) {
            $pesanan = $pesanan->where('name', 'like', '%' . request()->search . '%');
            $pesanan = $pesanan->where('username', 'like', '%' . request()->search . '%');
        })->paginate(10);
        return view('admin.pesanan.index', compact('pesanan'));
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
        $getpricelist = Pricelist::all();
        return view('admin.pesanan.create', compact(
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
            'getinvoice',
            'getpricelist',
        ));

    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        
        $random_number = 'TRK' . random_int(100000000000, 999999999999);
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/pesanan';
            $profileImage = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
       
        Pesanan::create([
            'name_id' => $request->name_id,
            'username_id' => $request->username_id,
            'origin' => $request->origin,
            'destinasi' => $request->destinasi,
            'jenis_barang_id' => $request->jenis_barang_id,
            'berat_id' => $request->berat_id,
            'dimensi_id' => $request->dimensi_id,
            'harga_id' => $request->harga_id,
            'note' => $request->note,
            'packing' => $request->packing,
            'gambar' => $profileImage,
            'voucher_id' => $request->voucher_id,
            'jenis_pembayaran_id' => $request->jenis_pembayaran_id,
            'penjemputan' => $request->penjemputan,
            'pengantaran' => $request->pengantaran,
            'invoice_id' => $request->invoice_id,
            'nomer_resi' => $random_number,
        ]);
        return redirect()->route('admin-pesanan.index')
            ->withSuccess(__('Pesanan created successfully.'));
    }

    public function show(Pesanan $pesanan)
    {
        return view('admin.pesanan.show', compact('pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        return view('admin.pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $data = $this->validate($request, $this->rules($pesanan));

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/pesanan';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }else{
            unset($input['gambar']);
        }
        $pesanan->update($input);
        return redirect()->route('admin-pesanan.index', compact('pesanan'))
            ->withSuccess(__('Pesanan updated successfully.'));
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('admin-pesanan.index', $pesanan)->with('success', 'Pesanan deleted successfully');
    }
}
