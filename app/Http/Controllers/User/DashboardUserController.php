<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        return view('user.dashboard');
    }
}