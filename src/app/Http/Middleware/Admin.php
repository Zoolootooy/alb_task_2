<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        "http://albtask2.local/changeShow";

        if (!\Auth::check()) {
            return abort('404');
        }

        if (\Auth::user()->isAdmin == false) {
            return abort('404');
        }

        return $next($request);
    }
}
