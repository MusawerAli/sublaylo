<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRole
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
        
      
        if(Auth::user() && Auth::user()->role=='shopper'){
     
      // return route('admin-dash');
       return $next($request);
    }elseif(Auth::user()->role=='user'){
        return route('admin-dash');
    }
  
     return redirect('/');
    
    }
}
