<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PersonalMissionCreateAdminCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->user_type == 2)
        {
            return redirect(route('personalMissionDashboardUser'));
        }
        return $next($request);
    }
}
