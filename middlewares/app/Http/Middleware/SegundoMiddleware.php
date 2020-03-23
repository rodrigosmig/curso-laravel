<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class SegundoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::debug("Passou pelo segundo Middleware ANTES");
        $response = $next($request);
        Log::debug("Passou pelo segundo Middleware DEPOIS");
        return $response;
    }
}
