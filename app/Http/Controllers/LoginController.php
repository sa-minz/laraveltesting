<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the custom login form
    public function create()
    {
        return view('auth.login'); // Make sure this view exists
    }

    // Handle login form submission
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Get logged-in user
            $user = Auth::user();

            // Check role and redirect accordingly
            if ($user->role === 'admin') {
                return redirect()->intended('/admin_d'); // admin dashboard route
            } elseif ($user->role === 'customer') {
                return redirect()->intended('/cust_d'); // customer dashboard route
            } else {
                // fallback if role is missing or unknown
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }
}
