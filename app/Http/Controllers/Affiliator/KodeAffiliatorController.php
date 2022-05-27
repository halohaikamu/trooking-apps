<?php

namespace App\Http\Controllers\Affiliator;

use App\Http\Controllers\Controller;
use App\Models\Affiliator;
use App\Models\DataAffiliator;
use Illuminate\Http\Request;

class KodeAffiliatorController extends Controller
{

    public function rules($id = false)
    {
        return  [
            'affiliator_id' => 'required',
            'whatsapp' => 'required',
        ];
    }

    public function index()
    {
        $dataAffiliator = DataAffiliator::all();
        $Affiliator = Affiliator::all();
        return view('affiliator.kode.index', compact('dataAffiliator', 'Affiliator'));
    }
}
