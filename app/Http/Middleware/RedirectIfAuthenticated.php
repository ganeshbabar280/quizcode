<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if($guard == 'student' && Auth::guard($guard)->check()){
                return redirect(RouteServiceProvider::student_HOME);
            }
            if($guard == 'teacher' && Auth::guard($guard)->check()){
                return redirect(RouteServiceProvider::Teacher_HOME);
            }
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::Admin_HOME);
            }
        }

        return $next($request);
    }
}
