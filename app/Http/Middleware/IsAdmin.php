<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        $allowedAdminValues = ['4', '6'];
        $allowedActivateValues = ['5', '7'];

        if ($user && in_array($user->admin, $allowedAdminValues) && in_array($user->activate, $allowedActivateValues)) {
            return $next($request);
        }
        abort(404, 'You are an IMPOSTOR in our community');
    }
}
