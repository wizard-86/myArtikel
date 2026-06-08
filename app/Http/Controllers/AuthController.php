<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (
    $request->username === 'admin' &&
    $request->password === '123'
        ) {

            session([
                'login' => true
            ]);
            return redirect('/artikel');
            }
        return redirect('/login'); 
    }

    public function logout()
    {
        session()->forget('login');
        return redirect('/');
    }
}
