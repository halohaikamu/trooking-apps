<?php

namespace App\Http\Controllers\Affiliator;

use App\Http\Controllers\Controller;
use App\Models\Affiliator;
use App\Models\DataAffiliator;

class DatadiriAffiliatorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function rules($id = false)
    {
        return  [
            'affliator_id' => 'required',
            'whatsapp' => 'required',
            'foto_ktp' => 'required',
            'foto_npwp' => 'nullable',
        ];
    }

    public function index()
    {
        $dataAffiliator = DataAffiliator::all();
        $Affiliator = Affiliator::all();
        return view('affiliator.datadiri.datadiri', compact('affiliator'));
    }
    public function create()
    {
        $getaffiliator = Affiliator::select('id', 'name')->get();
        $getdata = DataAffiliator::first();
        return view('vendor.data-diri.create', compact(
            'getvendor',
            'getdata'
        ));
        return view('affiliator.datadiri.create');
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
        }
        DataAffiliator::create($input);
        return redirect()->route('datadiri.index')
            ->withSuccess(__('Pesanan created successfully.'));
    }
}
