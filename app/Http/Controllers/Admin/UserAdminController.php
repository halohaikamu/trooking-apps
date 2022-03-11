<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserAdminController extends Controller
{
    public function index()
    {
        $user = Admin::latest()->when(request()->search, function($user) {
            $user = $user->where('name', 'like', '%'. request()->search . '%');
        })->paginate(10);

        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->route('user.index')
            ->withSuccess(__('User created successfully.'));
    }

    public function show(Admin $user)
    {
        return view('admin.user.show',compact('user'));
    }

    public function edit(Admin $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request, Admin $user){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = Admin::findOrFail($user->id);
        $user->update($request->all());
        event(new Registered($user));
        return redirect()->route('user.index',compact('user'))
            ->withSuccess(__('User updated successfully.'));
    }

    public function destroy(Admin $user)
    {
        $user = Admin::findOrFail($user->id);
        $user->delete();
        return redirect()->route('user.index',$user)->with('success','User deleted successfully');
    }
}
