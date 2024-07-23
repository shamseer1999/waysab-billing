<?php

namespace App\Http\Controllers\mngr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {

        if(Auth::attempt($request->only('username','password'))){
            return redirect()->route('mngr.dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
