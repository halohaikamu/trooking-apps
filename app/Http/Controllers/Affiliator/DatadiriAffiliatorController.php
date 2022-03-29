<?php

namespace App\Http\Controllers\Affiliator;

use App\Http\Controllers\Controller;
use App\Models\Affiliator;
use App\Models\DataAffiliator;
use Illuminate\Http\Request;

class DatadiriAffiliatorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function rules($id = false)
    {
        return  [
            'affiliator_id' => 'required',
            'whatsapp' => 'required',
            'foto_ktp' => 'required',
            'foto_npwp' => 'nullable',
        ];
    }

    public function index()
    {
        $dataAffiliator = DataAffiliator::all();
        $Affiliator = Affiliator::all();
        return view('affiliator.datadiri.datadiri', compact('dataAffiliator', 'Affiliator'));
    }
    public function create()
    {
        $getaffiliator = Affiliator::select('id', 'name')->get();
        $getdata = DataAffiliator::first();
        return view('affiliator.datadiri.create', compact(
            'getaffiliator',
            'getdata'
        ));
        return view('affiliator.datadiri.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        $input = $request->all();
        if ($foto_ktp = $request->file('foto_ktp')) {
            $destinationPath = 'gambar/affiliator/foto_ktp';
            $profileImage = date('YmdHis') . "." . $foto_ktp->getClientOriginalExtension();
            $foto_ktp->move($destinationPath, $profileImage);
            $input['foto_ktp'] = "$profileImage";
        }
        if ($foto_npwp = $request->file('foto_npwp')) {
            $profilenpwp = date('Y') . "." . $foto_npwp->getClientOriginalExtension();
            $foto_npwp->storeAs('gambar/affiliator/foto_npwp', $profilenpwp);
            $input['foto_npwp'] = "$profilenpwp";
        }
        DataAffiliator::create($input);
        return redirect()->route('datadiri.index')
            ->withSuccess(__('Affiliator created successfully.'));
    }

    public function edit(DataAffiliator $dataAffiliator)
    {
        return view('affiliator.datadiri.edit', compact('dataAffiliator'));
    }

    public function update(Request $request, DataAffiliator $dataAffiliator)
    {
        $data = $this->validate($request, $this->rules($dataAffiliator));

        $input = $request->all();
        if ($foto_ktp = $request->file('foto_ktp')) {
            $destinationPath = 'gambar/affiliator/foto_ktp';
            $profileImage = date('YmdHis') . "." . $foto_ktp->getClientOriginalExtension();
            $foto_ktp->move($destinationPath, $profileImage);
            $input['foto_ktp'] = "$profileImage";
        } else {
            unset($input['foto_ktp']);
        }
        $dataAffiliator->update($input);
        return redirect()->route('datadiri.index', compact('dataAffiliator'))
            ->withSuccess(__('Data Affiliator updated successfully.'));
    }

    public function destroy(DataAffiliator $dataAffiliator)
    {
        $dataAffiliator->delete();
        return redirect()->route('datadiri.index', $dataAffiliator)->with('success', 'Data Vendor deleted successfully');
    }
}
