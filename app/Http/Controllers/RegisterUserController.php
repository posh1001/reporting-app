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
             'church_group' => 'required|string|in:Lagos Island,Eti-Osa,Epe,Ibeju Lekki,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
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

