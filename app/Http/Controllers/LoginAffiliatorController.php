<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAffiliatorController extends Controller
{
    public function create(Request $request){
        if(Auth::guard('affiliator')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('affiliator/dashboard');
        }
        return redirect('/login/affiliator');
    }

    public function logout(){
        if(Auth::guard('affiliator')->check()){
            Auth::guard('affiliator')->logout();
        }
        return redirect('/login/affiliator');
    }
}
