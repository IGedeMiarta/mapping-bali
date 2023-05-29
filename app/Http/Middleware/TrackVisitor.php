<?php

namespace App\Http\Middleware;

use App\Models\VisitorTracking;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next)
    {
        $visitor = [
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'visited_at' => now(),
        ];

        VisitorTracking::insert($visitor);

        return $next($request);
    }
}
