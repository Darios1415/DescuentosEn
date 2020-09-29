<?php

namespace App\Http\Middleware;

use Closure;

class Web
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
        if(!\session()->has('usuario')){
            return redirect('/');
        }
        $admin=\session()->get('usuario');
        if ($admin[0]->idtu!=0)
        {

            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}
