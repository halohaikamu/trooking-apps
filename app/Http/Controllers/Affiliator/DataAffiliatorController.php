<?php

namespace App\Http\Controllers\Affiliator;

use App\Http\Controllers\Controller;
use App\Models\Affiliator;
use App\Models\DataAffiliator;
use Illuminate\Http\Request;

class DataAffiliatorController extends Controller
{
    
    public function rules($id = false)
    {
        return  [
            'affiliator_id' => 'required',
            'whatsapp' => 'required',
            'foto_ktp' => 'required',
            'foto_npwp' => 'required'
        ];
    }

    public function index()
    {
        $dataAffiliator = DataAffiliator::all();
        $Affiliator = Affiliator::all();
        return view('affiliator.data-diri.index', compact('dataAffiliator', 'Affiliator'));
    }
    public function create()
    {
        $getaffiliator = Affiliator::select('id', 'name')->get();
        $getdata = DataAffiliator::first();
        return view('affiliator.data-diri.create', compact(
            'getaffiliator',
            'getdata'
        ));
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
        return redirect()->route('affiliator-data-diri.index')
            ->withSuccess(__('Affiliator created successfully.'));
    }

    public function edit(DataAffiliator $dataAffiliator)
    {
        return view('affiliator.data-diri.edit', compact('dataAffiliator'));
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
        }if ($foto_npwp = $request->file('foto_npwp')) {
            $profilenpwp = date('Y') . "." . $foto_npwp->getClientOriginalExtension();
            $foto_npwp->storeAs('gambar/affiliator/foto_npwp', $profilenpwp);
            $input['foto_npwp'] = "$profilenpwp";
        } 
        else {
            unset($input['foto_ktp']);
        }
        $dataAffiliator->update($input);
        return redirect()->route('affiliator-data-diri.index', compact('dataAffiliator'))
            ->withSuccess(__('Data Affiliator updated successfully.'));
    }
}
