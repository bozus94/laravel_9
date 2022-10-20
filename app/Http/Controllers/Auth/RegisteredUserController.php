<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    public function register()
    {
        // dd(Auth::check());
        if (Auth::check()) {
            return to_route('home');
        }

        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'email' => ['email', 'string', 'required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \bcrypt($request->password)
        ]);

        return to_route('login')->with('status', 'Usuario registrado');
    }
}
