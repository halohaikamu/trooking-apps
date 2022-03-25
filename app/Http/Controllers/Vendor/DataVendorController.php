<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\City;
use App\Models\DataVendor;
use Illuminate\Http\Request;
use Str;

class DataVendorController extends Controller
{
    public function rules($id = false)
    {
        return  [
            'vendor_id' => 'required',
            'whatsapp' => 'required',
            'nama_driver' => 'required',
            'nopol_driver' => 'required',
            'coverage_area' => 'required',
            'foto_ktp' => 'required',
            'foto_unit' => 'nullable',
            'foto_sim' => 'nullable',
            'foto_stnk' => 'nullable',
        ];
    }

    public function index()
    {
        $dataVendor = DataVendor::all();
        $Vendor = Vendor::all();
        return view('vendor.data-diri.index', compact('dataVendor','Vendor'));
    }

    public function create()
    {
        $getvendor = Vendor::select('id', 'name')->get();
        $getcoverage = City::select('id', 'name')->get();
        $getdata = DataVendor::first();
        return view('vendor.data-diri.create', compact(
            'getvendor',
            'getcoverage',
            'getdata'
        ));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        $input = $request->all();
        if ($foto_ktp = $request->file('foto_ktp')) {
            $destinationPath = 'gambar/vendor/foto-ktp';
            $profilektp = date('YmdHis') . "." . $foto_ktp->getClientOriginalExtension();
            $foto_ktp->move($destinationPath, $profilektp);
            $input['foto_ktp'] = "$profilektp";
        }elseif($foto_unit = $request->file('foto_unit')){
            $destinationPath = 'gambar/vendor/foto-unit';
            $profileunit = date('YmdHis') . "." . $foto_unit->getClientOriginalExtension();
            $foto_unit->move($destinationPath, $profileunit);
            $input['foto_unit'] = "$profileunit";
        }elseif($foto_sim = $request->file('foto_sim')){
            $destinationPath = 'gambar/vendor/foto-sim';
            $profilesim = date('YmdHis') . "." . $foto_sim->getClientOriginalExtension();
            $foto_sim->move($destinationPath, $profilesim);
            $input['foto_sim'] = "$profilesim";
        }elseif($foto_stnk = $request->file('foto_stnk')){
            $destinationPath = 'gambar/vendor/foto-stnk';
            $profilestnk = date('YmdHis') . "." . $foto_stnk->getClientOriginalExtension();
            $foto_stnk->move($destinationPath, $profilestnk);
            $input['foto_stnk'] = "$profilestnk";
        }
        DataVendor::create($input);
        return redirect()->route('data-diri.index')
            ->withSuccess(__('Data Vendor created successfully.'));
    }

    public function edit(DataVendor $dataVendor)
    {
        return view('vendor.data-diri.edit', compact('dataVendor'));
    }

    public function update(Request $request, DataVendor $dataVendor)
    {
        $data = $this->validate($request, $this->rules($dataVendor));

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/vendor';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }else{
            unset($input['gambar']);
        }
        $dataVendor->update($input);
        return redirect()->route('data-diri.index', compact('dataVendor'))
            ->withSuccess(__('Data Vendor updated successfully.'));
    }

    public function destroy(DataVendor $dataVendor)
    {
        $dataVendor->delete();
        return redirect()->route('data-diri.index', $dataVendor)->with('success', 'Data Vendor deleted successfully');
    }
}