<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function login ()
    {
        return view('partials.login');
    }

    public function dologin(Request $request)
    {
        $request ->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi setelah sholat',
            'password.required' => 'Password wajib diisi setelah sholat',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if (Auth::user()->role == 'admin') {
                toast('Login Berhasil!', 'success');
                return redirect('dashboard');
            }else if (Auth::user()->role == 'petugas') {
                toast('Login Berhasil!', 'success');
                return redirect('dashboard');
            }else if (Auth::user()->role == 'user') {
                toast('Login Berhasil!', 'success');
                return redirect('');
            } else {
                toast('Login Gagal!', 'error');
                return redirect("login");
            }
        }else{toast('Login Gagal!', 'error');
            return redirect("login");
        }
    }

    public function register()
    {
        return view('partials.register');
    }
    public function doregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password),
        ]);
        if ($user) {
            return redirect("");
        } else {
            return redirect("register")->withErrors('Inputan salah')->withInput();
        }
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
