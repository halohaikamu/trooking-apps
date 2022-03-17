<?php

namespace App\Http\Controllers\Affiliator;

use App\Http\Controllers\Controller;

class DashboardAffiliatorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    
    public function index()
    {
        return view('affiliator.dashboard');
    }
}