<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperMiddleware
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
        if(Auth::user()->email == 'mathewmoroko@gmail.com')
        {
            return $next($request);

        }
        else
        {
            return redirect('dashboard')->with('status','Access denial!');

        }
    }
}
