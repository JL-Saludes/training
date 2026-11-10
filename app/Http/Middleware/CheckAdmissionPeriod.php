<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmissionPeriod
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //note: these dates are hardcoded for the purpose of demonstration only.
        //

        $start = now()->setDate(2025, 11, 1)->startOfDay();
        $end = now()->setDate(2026, 3, 31)->endOfDay();
        
        if(!now()->between($start, $end)) {
            return redirect()->route('home')->with('error', 'The admission period is closed.');
        }

        return $next($request);
    }
}
