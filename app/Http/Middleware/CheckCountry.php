<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   //echo 1234; exit;
        if ($request->country && !in_array($request->country, array("us", "in", "afg"))) {
            return redirect("noaccess");
        }
        return $next($request);
    }
}
