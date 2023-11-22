<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class IsUserCheck
{
    public function handle(Request $request, Closure $next): Response
    {
//        dd($request);
        if (Auth::user()->id != $request->get('id'))
        {
            return redirect(route('user_dashboard'));
        }
        return $next($request);
    }
}
