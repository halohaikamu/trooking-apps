<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAgentController extends Controller
{
    public function create(Request $request){
        if(Auth::guard('agent')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('agent/dashboard');
        }
        return redirect('/login/agent');
    }

    public function logout(){
        if(Auth::guard('agent')->check()){
            Auth::guard('agent')->logout();
        }
        return redirect('/login/agent');
    }
}
