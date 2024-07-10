<?php

namespace App\Http\Controllers;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Guest;

class GuestLoginController extends Controller
{
    

    public function showLoginForm()
    {
        return view('guest.login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('guest')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            // Authentication passed, redirect to guest homepage
            return redirect()->route('guest.homepage');
        }

        // Authentication failed, redirect back with input and error message
        return back()->withInput($request->only('username'))->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('guest.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:guests,username',
            'email' => 'required|unique:guests,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new guest
        Guest::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page
        return redirect()->route('guest.login')->with('status', 'Registration successful. Please login.');
    }
}
