<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$status): Response
    {

        if (auth()->user()->status !== $status) {
            // If status does not match, redirect or return an error response
            return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
        }
        return $next($request);
    }
}
