<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user = Admin::all();
        return view('admin.dashboard', compact('user'));
    }
}