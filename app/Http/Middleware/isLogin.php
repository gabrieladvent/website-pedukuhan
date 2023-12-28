<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user(), Auth::check());
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Maaf anda tidak memiliki akses');
        }
        
        return $next($request);
    }
}
