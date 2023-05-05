<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/dashboard');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout()
    {
        Auth::logout(); // log the user out
        return redirect('/'); // redirect to login page with success message
    }
}
