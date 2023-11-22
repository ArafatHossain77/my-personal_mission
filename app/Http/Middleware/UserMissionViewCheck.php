<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMissionViewCheck
{
    public function handle(Request $request, Closure $next)
    {
//         user_type = 1 (admin)
        if (Auth::user()->user_type == 1)
        {
            return redirect(route('personalMissionAdminView'));
        }
        return $next($request);
    }
}
