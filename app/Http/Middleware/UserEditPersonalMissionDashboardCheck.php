<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserEditPersonalMissionDashboardCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->user_type == 1)
        {
            return redirect(route('admin_Personal_mission_edit_Dashboard'));
        }
        return $next($request);
    }
}
