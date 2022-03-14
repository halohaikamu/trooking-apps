<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }
        if (Auth::guard('admin')) {
            return route('admin.login');
        }elseif(Auth::guard('user')){
            return route('user.login');
        }elseif(Auth::guard('affiliator')){
            return route('affiliator.login');
        }elseif(Auth::guard('agent')){
            return route('agent.login');
        }elseif(Auth::guard('vendor')){
            return route('vendor.login');
        }
    }
}
