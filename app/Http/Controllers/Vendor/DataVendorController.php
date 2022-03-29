<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\City;
use App\Models\DataVendor;
use Illuminate\Http\Request;
use Auth;
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
            'foto_unit' => 'required',
            'foto_sim' => 'required',
            'foto_stnk' => 'required',
        ];
    }

    public function index()
    {
        $dataVendor = DataVendor::all();
        $Vendor = Vendor::all();
        return view('vendor.data-diri.index', compact('dataVendor', 'Vendor'));
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
            $destinationPath = 'gambar/vendor/foto_ktp';
            $profilektp = $foto_ktp->getClientOriginalName();
            $foto_ktp->move($destinationPath, $profilektp);
            $input['foto_ktp'] = "$profilektp";
        }
        if ($foto_unit = $request->file('foto_unit')) {
            $destinationPath = 'gambar/vendor/foto_unit';
            $profileunit = $foto_unit->getClientOriginalName();
            $foto_unit->move($destinationPath, $profileunit);
            $input['foto_unit'] = "$profileunit";
        }
        if ($foto_sim = $request->file('foto_sim')) {
            $destinationPath = 'gambar/vendor/foto_sim';
            $profilesim = $foto_sim->getClientOriginalName();
            $foto_sim->move($destinationPath, $profilesim);
            $input['foto_sim'] = "$profilesim";
        }
        if ($foto_stnk = $request->file('foto_stnk')) {
            $destinationPath = 'gambar/vendor/foto_stnk';
            $profilestnk = $foto_stnk->getClientOriginalName();
            $foto_stnk->move($destinationPath, $profilestnk);
            $input['foto_stnk'] = "$profilestnk";
        }
        DataVendor::create($input);
        return redirect()->route('data-diri.index')
            ->withSuccess(__('Data Vendor created successfully.'));
    }

    public function edit($id)
    {
        $getvendor = Vendor::select('id', 'name')->get();
        $getcoverage = City::select('id', 'name')->get();
        $getdata = DataVendor::find($id);
        return view('vendor.data-diri.edit', compact(
            'getvendor',
            'getcoverage',
            'getdata'
        ));
    }

    public function update(Request $request, DataVendor $dataVendor)
    {
        $data = $this->validate($request, $this->rules($dataVendor));

        $input = $request->all();
        if ($foto_ktp = $request->file('foto_ktp')) {
            $destinationPath = 'gambar/vendor/foto_ktp';
            $profilektp = $foto_ktp->getClientOriginalName();
            $foto_ktp->move($destinationPath, $profilektp);
            $input['foto_ktp'] = "$profilektp";
        }
        if ($foto_unit = $request->file('foto_unit')) {
            $destinationPath = 'gambar/vendor/foto_unit';
            $profileunit = $foto_unit->getClientOriginalName();
            $foto_unit->move($destinationPath, $profileunit);
            $input['foto_unit'] = "$profileunit";
        }
        if ($foto_sim = $request->file('foto_sim')) {
            $destinationPath = 'gambar/vendor/foto_sim';
            $profilesim = $foto_sim->getClientOriginalName();
            $foto_sim->move($destinationPath, $profilesim);
            $input['foto_sim'] = "$profilesim";
        }
        if ($foto_stnk = $request->file('foto_stnk')) {
            $destinationPath = 'gambar/vendor/foto_stnk';
            $profilestnk = $foto_stnk->getClientOriginalName();
            $foto_stnk->move($destinationPath, $profilestnk);
            $input['foto_stnk'] = "$profilestnk";
        } else {
            unset($input['foto_ktp']);
        }
        $dataVendor->update($input);
        return redirect()->route('data-diri.index', compact('dataVendor'))
            ->withSuccess(__('Data Vendor updated successfully.'));
    }
}
