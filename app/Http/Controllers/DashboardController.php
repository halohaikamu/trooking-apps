<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function agent()
    {
        return view('agent.dashboard');
    }
    public function affiliator()
    {
        return view('affiliator.dashboard');
    }
    public function user()
    {
        return view('user.dashboard');
    }
    public function vendor()
    {
        return view('vendor.dashboard');
    }
}
