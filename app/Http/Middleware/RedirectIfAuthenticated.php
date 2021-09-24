<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        
       if (auth('web')->check()){
     
        return redirect(RouteServiceProvider::HOME);
   
       }
 
  
        if (auth('doctors')->check()){
     
         return redirect(RouteServiceProvider::H_doctors);
    
      }

      if (auth('nurses')->check()){
     
        return redirect(RouteServiceProvider::H_nurses);
   
     }
 
     if (auth('employes')->check()){
     
      return redirect(RouteServiceProvider::H_employes);
 
   }
        return $next($request);
  
    }
}
