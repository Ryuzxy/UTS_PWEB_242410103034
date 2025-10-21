<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        // Simple authentication logic (for demonstration purposes only)
        if ($username === 'admin' && $password === 'password'  && $email === 'admin@gmail.com') {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->withErrors(['Invalid credentials. Please try again.']);
        }
    }
}
