<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthSession
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $info = session()->get('info') ?? [];

        if (\Arr::exists($info, 'access_token')) {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Current session has expired');
    }
}
