<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([ 
            'email' => 'required',
            'password' => 'required'
        ]);

        // DATA STATIS TANPA DATABASE
        $validEmail = 'admin@gmail.com';
        $validPassword = '12345'; 

        if ($request->email === $validEmail && $request->password === $validPassword) {
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'login' => 'Email atau password salah'
        ]);
    }
}