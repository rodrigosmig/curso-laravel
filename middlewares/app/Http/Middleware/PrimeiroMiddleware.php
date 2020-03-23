<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class PrimeiroMiddleware
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
        Log::debug("Passou pelo primeiro Middleware ANTES");
        $response = $next($request);
        Log::debug("Passou pelo primeiro Middleware DEPOIS");
        //return $response;
        return $response->setContent('Alterei a resposta');

    }
}
