<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StrictTransportHeaderPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $response = $next($request);
       $response->headers->set('Strict-Transport-Security','max-age=31536000; includeSubDomains');
        return $next($request);
    }
}
