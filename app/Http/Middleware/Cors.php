<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
        ->header('Access-Control-Alllow-Origin',"*")
        ->header('Access-Control-Alllow-Methods',"PUT,POST,DELETE,GET,OPTIONS")
        ->header('Access-Control-Alllow-Headers',"Accept,Authorization,Content-Type,Acces-Control-Allow-Headers,Access-Control-Request-Method,Access-Control-Request-Headers");
        
    }


}
