<?php

namespace App\Http\Middleware;

use App\Utility\UserUtility;
use Closure;

class AdminMiddleware
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
        if(auth()->user()->role !== UserUtility::ADMIN){
           return redirect('/');
        }
        return $next($request);
    }
}
