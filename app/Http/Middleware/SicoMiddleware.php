<?php

namespace App\Http\Middleware;

use Closure;
use SicoHelpers\Helpers;
use Illuminate\Http\Request;

class SicoMiddleware
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
        $Authorizedcountries=["Benin","France"];
        if(in_array(Helpers::pays('d'),$Authorizedcountries)){
            return $next($request);
        }else{
            return "";
        }
     


        
    }
}
