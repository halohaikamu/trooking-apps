<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(Request $request){
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('admin.dashboard');
        }elseif(Auth::guard('agent')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('agent.dashboard');
        }elseif(Auth::guard('affiliator')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('affiliator.dashboard');
        }elseif(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('user.dashboard');
        }elseif(Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('vendor.dashboard');
        }
        return redirect('/');
    }

    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }elseif(Auth::guard('agent')->check()){
            Auth::guard('agent')->logout();
        }elseif(Auth::guard('affiliator')->check()){
            Auth::guard('affiliator')->logout();
        }elseif(Auth::guard('agent')->check()){
            Auth::guard('agent')->logout();
        }elseif(Auth::guard('agent')->check()){
            Auth::guard('agent')->logout();
        }
        return redirect('/');
    }
}
