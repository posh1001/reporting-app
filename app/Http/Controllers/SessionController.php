<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate email only
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['This email is not registered.'],
            ]);
        }

        // Log in the user manually
        Auth::login($user);

        // Regenerate session
        $request->session()->regenerate();

        // Redirect
        return redirect('/')->with('success', 'Logged in successfully.');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
