<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AuthUser; // This would cause the error if AuthUser doesn't exist


class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->utype === 'USR')
            {
                return $next($request);
            }
            else
            {
                session()->flush();
                return redirect()->route('login');
            }
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }        
    }
}