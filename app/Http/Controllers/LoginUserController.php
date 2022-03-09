<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function create(Request $request){
        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('user/dashboard');
        }
        return redirect('/login/user');
    }

    public function logout(){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/login/user');
    }
}
