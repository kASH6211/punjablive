<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddContentSecurityPolicyHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Make sure $response is an instance of Illuminate\Http\Response
        if ($response instanceof \Illuminate\Http\Response) {
            $cspHeader = "default-src 'self';"; // Modify this based on your CSP policy
            $response->header('Content-Security-Policy', $cspHeader);
        }

        return $response;
    }
}
