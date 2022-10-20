<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function Termwind\ask;

class AuthenticatedUserController extends Controller
{
    public function login()
    {
        // dd(Auth::check());
        if (Auth::check()) {
            return to_route('home');
        }

        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['email', 'string', 'required'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended()->with('status', 'You are logging!!');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'Yo are logged out!!');
    }
}
