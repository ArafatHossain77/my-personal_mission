<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class MissionReport
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->user_type == 2)
        {
            return Redirect::back();
        }
        return $next($request);
    }
}
