<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class Admin
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
        if(!Auth::user()->admin){
            Session::flash('info','You are not an Admin');
            return redirect()->back();
        }
        return $next($request);
    }
}
