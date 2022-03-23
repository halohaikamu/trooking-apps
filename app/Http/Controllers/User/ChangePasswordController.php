<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('user.dashboard.forgot-password');
    }

    public function forgotPasswordValidate($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $email = $user->email;
            return view('user.dashboard.change-password', compact('email'));
        }
        return redirect()->route('user.dashboard.forgot-password')->with('failed', 'Password reset link is expired');
    }

    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $id = Auth::user()->id;
        $user = User::where('id', $id)->where('email', $request->email)->first();
        if (!$user) {
            return back()->with('failed', 'Failed! email is not registered.');
        }

        $token = Str::random(60);

        $user['token'] = $token;
        $user->save();

        Mail::to($request->email)->send(new ResetPassword($user->name, $token));

        if(Mail::failures() != 0) {
            return back()->with('success', 'Success! password reset link has been sent to your email');
        }
        return back()->with('failed', 'Failed! there is some issue with email provider');
    }

    public function updatePassword(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user['token'] = '';
            $user['password'] = Hash::make($request->password);
            $user->save();
            return redirect('/login/user')->with('success', 'Success! password has been changed');
        }
        return redirect()->route('user.dashboard.forgot-password')->with('failed', 'Failed! something went wrong');
    }
}