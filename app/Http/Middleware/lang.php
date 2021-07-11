<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('lang')){
            $lang = session()->get('lang');
            app()->setlocale($lang);
        }
        // else{
        //     app()-setlocale('en');

        // }
    
        return $next($request);
    }
}
