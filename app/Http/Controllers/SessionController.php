<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login ()
    {
        return view('login');
    }

    function dologin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = $request->only('email', 'password');
        if(auth()->attempt($data)){
            return redirect('dashboard');
        }
        return redirect('login');

    }
    function logout ()
    {
        session()->flush();
        return redirect('login');
    }
}