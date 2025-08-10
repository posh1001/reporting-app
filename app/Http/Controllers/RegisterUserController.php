<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisterUserController extends Controller
{

    public function create() {

        return view('auth.register');

    }

   public function store(Request $request)
{

        $validated = $request->validate([
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'group' => 'required|string|max:255',
            'church' => 'required|string|max:255',
             'password' => ['required', Password::min(6)],
            // Add other validation rules based on x-home-form fields
        ]);

         $validated['password'] = Hash::make($validated['password']);

        // Create the user
        $user = User::create($validated);

         // Log in the user
         Auth::login($user);

        return redirect('/login')->with('success', 'Sign Up successfully.');
    }
}

