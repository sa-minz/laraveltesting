<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function create()
    {
        return view('auth.login');
    }

    // Process login form submission
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember'); // Check if "Remember Me" was checked

        if (Auth::attempt($credentials, $remember)) { // Pass $remember to attempt()
            $request->session()->regenerate();

            // Simple role-based redirects
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            
            // Default redirect for regular users
            return redirect('/user/dashboard');
        }

        // If authentication fails
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }
}