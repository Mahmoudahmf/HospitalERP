<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\H_doctorLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
class H_DoctorsController extends Controller
{
    //
    public function store(H_doctorLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::H_doctors);
    }

    public function destroy(Request $request)
    {
        Auth::guard('doctors')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

