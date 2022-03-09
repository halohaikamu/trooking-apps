<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginVendorController extends Controller
{
    public function create(Request $request){
        if(Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('vendor/dashboard');
        }
        return redirect('/login/vendor');
    }

    public function logout(){
        if(Auth::guard('vendor')->check()){
            Auth::guard('vendor')->logout();
        }
        return redirect('/login/vendor');
    }
}
