<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
class checkrol
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
        if ($admin[0]->idtu==1)
        {

            return $next($request);
        }
        else {
            return redirect('/');
        }

}
}
