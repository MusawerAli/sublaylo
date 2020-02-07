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
        
      
        if(Auth::user()->role=='user'){
        // return $next($request);
        return redirect()->to('user-dash');
    }
    elseif(Auth::user()->role=='shopkeeper'){
       // return $next($request);
        return redirect()->to('shopkeeper-dash');
    }else{
        //return next($request);
        return redirect()->to('admin-dash');
    }

    
    }
}
