<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    
    public function create()
    {
       
        if (Auth::guard('admins')->check()) {
            // return redirect()->route('dashboard.doctors');
            return redirect(RouteServiceProvider::admins);

        } 
        else if (Auth::guard('doctors')->check()) {
            // return redirect()->route('dashboard.doctors');
            return redirect(RouteServiceProvider::H_doctors);

        } 
        else if(Auth::guard('nurses')->check()){
            return redirect(RouteServiceProvider::H_nurses);

        }
        else if(Auth::guard('employes')->check()){
            return redirect(RouteServiceProvider::H_employes);
        }
        else {
            return view('pages.login');
        }
    }

  
    public function store(Request $request)
    {
       
        // return $request;
        $logAccess=substr($request->username,0,3);
        // return $logAccess;
        $this->validate($request, [
           
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

       // //   for admins guard
       if($logAccess=='ad_')
       {
               if(auth()->guard('admins')->attempt([
                   'username' => $request->username,
                   'password' => $request->password,
               ])) 
               {
                   return redirect()->intended(url('/dashboard/admins'));
               } 
              
       }
        // //   for docotr guard
            if($logAccess=='dr_')
            {
                    if(auth()->guard('doctors')->attempt([
                        'username' => $request->username,
                        'password' => $request->password,
                    ])) 
                    {
                        return redirect()->intended(url('/dashboard/doctors'));
                    } 
                   
            }

                // //   for nurse guard
                    if($logAccess=='nr_')
                    {
                            if(auth()->guard('nurses')->attempt([
                                'username' => $request->username,
                                'password' => $request->password,
                            ])) 
                            {
                                return redirect()->intended(url('/dashboard/nurses'));
                            } 
                    }
                    // //   for employes guard
                    if($logAccess=='em_')
                    {
                            if(auth()->guard('employes')->attempt([
                                'username' => $request->username,
                                'password' => $request->password,
                                'role'=>'4',
                            ])) 
                            {
                                return redirect(RouteServiceProvider::H_employes);
                            } 
                           
                    }

                    if($logAccess !==('emp_' || 'nur_' || 'doc_'))
                      {
                        return redirect('/');
                      }

    }

   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
