<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ResetEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ChangeEmailController extends Controller
{
    public function forgotEmail()
    {
        return view('user.dashboard.forgot-email');
    }

    public function forgotEmailValidate($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $email = $user->email;
            return view('user.dashboard.change-email', compact('email'));
        }
        return redirect()->route('user.dashboard.forgot-email')->with('failed', 'Email reset link is expired');
    }

    public function resetEmail(Request $request)
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

        Mail::to($request->email)->send(new ResetEmail($user->name, $token));

        if(Mail::failures() != 0) {
            return back()->with('success', 'Success! Email reset link has been sent to your email');
        }
        return back()->with('failed', 'Failed! there is some issue with email provider');
    }

    public function updateEmail(Request $request, User $user) {
        if ($user) {
            $user['token'] = '';
            $user['email'] = $request->email;
            $user->update($request->all());
            return redirect('/login/user')->with('success', 'Success! Email has been changed');
        }
        return redirect()->route('user.dashboard.forgot-email')->with('failed', 'Failed! something went wrong');
    }
}