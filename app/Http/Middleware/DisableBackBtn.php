<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableBackBtn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response=$next($request);
        $response->headers->set('Cache-control','nocache,no-store,max-age=0,must-revalidate');
        $response->headers->set('pragma','nocache');
        $response->headers->set('Expires','Mon,01 Jan 2023 00:00:00 GMT');

        return $next($request);
    }
}
