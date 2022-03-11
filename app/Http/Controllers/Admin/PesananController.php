<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Citie;
use App\Models\Barang;
use App\Models\Pricelist;
use App\Models\Voucher;
use App\Models\Pembayaran;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Str;

class PesananController extends Controller
{
    public function rules($id = false)
    {
        return  [
            'name_id' => 'required',
            'username_id' => 'required',
            'origin' => 'required',
            'destinasi' => 'required',
            'jenis_barang_id' => 'required',
            'berat_id' => 'required',
            'dimensi_id' => 'required',
            'harga_id' => 'required',
            'note' => 'required',
            'packing' => 'required',
            'gambar' => 'required',
            'voucher_id' => 'required',
            'jenis_pembayaran_id' => 'required',
            'invoice_id' => 'required',
            'nomer_resi_id' => 'required',
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
        $getberat = Pricelist::select('id', 'berat')->get();
        $getdimensi = Pricelist::select('id', 'dimensi')->get();
        $getharga = Pricelist::select('id', 'harga')->get();
        $getjenisbarang = Barang::select('id', 'jenis_barang')->get();
        $getvoucher = Voucher::select('id', 'voucher')->get();
        $getjenispembayaran = Pembayaran::select('id', 'jenis_pembayaran')->get();
        $getinvoice = Pembayaran::select('id', 'invoice')->get();
        $getnomerresi = Tracking::select('id', 'nomer_resi')->get();
        $origins = Pricelist::pluck('origin','id');
        //$destinasis = Pricelist::where('origin', $origins)->pluck('destinasi','id');
        // $getorigin = Pricelist::select('origin')
        // ->whereIn('id',function($query){
        //     $query->select('origin')->from('pricelists');
        // })->get();
        // $getdestinasi = Pricelist::select('destinasi')
        // ->whereIn('id',function($query){
        //    $query->select('destinasi')->from('pricelists');
        // })->get();
        // $getberat = Pricelist::select('berat')
        // ->whereIn('origin',function($query){
        //    $query->select('destinasi')->from('pricelists');
        // })->get();
        // $getdimensi = Pricelist::select('dimensi')
        // ->whereIn('origin',function($query){
        //    $query->select('destinasi')->from('pricelists');
        // })->get();
        // $getharga = Pricelist::select('harga')
        // ->whereIn('berat',function($query){
        //    $query->select('dimensi')->from('pricelists');
        // })->get();

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
            'getnomerresi',
            'getinvoice',
            'origins'
        ));
    }

    public function getDestinasi(Request $request)
    {
        $destinasis = Pricelist::where('origin', $request->get('id'))
            ->pluck('destinasi', 'id');
        
        return response()->json($destinasis);
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
        return redirect()->route('pesanan.index')
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
        return redirect()->route('pesanan.index', compact('pesanan'))
            ->withSuccess(__('Pesanan updated successfully.'));
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index', $pesanan)->with('success', 'Pesanan deleted successfully');
    }
}
