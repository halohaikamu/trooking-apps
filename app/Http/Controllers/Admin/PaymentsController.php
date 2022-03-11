<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
use Carbon\Carbon;


class PaymentsController extends Controller
{
    public function create()
    {
        return view('admin.payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bank_code' => 'required',
            'amount' => 'required',
        ]);

        Xendit::setApiKey('xnd_development_359SO0mx2XZhcAOYEAV8rXtz1oD9ndQ7ltvU05sgbzG7PoZFlu0dXfmxEzoG');
        $params = [
            "external_id" => "va-1475804036622",
            "bank_code" => addslashes($request->bank_code),
            "name" => addslashes($request->name),
            "is_closed" => true,
            "is_single_use" => true,
            "expected_amount" => addslashes($request->amount),
            "expiration_date" => Carbon::now()->addDay(1)->toISOString()
        ];

        $createVA = \Xendit\VirtualAccounts::create($params);
        return response()->json([
            'data' => $createVA
        ])->setStatusCode(200);

    }
    public function show()
    {
        Xendit::setApiKey('xnd_development_359SO0mx2XZhcAOYEAV8rXtz1oD9ndQ7ltvU05sgbzG7PoZFlu0dXfmxEzoG');
        $id = '62130e953965780bccbf6fcf';
        $getVA = \Xendit\VirtualAccounts::retrieve($id);
        return view('admin.payment.show');
    }

}
