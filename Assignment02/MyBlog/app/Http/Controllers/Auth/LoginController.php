<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        //Auth::loginsingId(3);
        // Validate the request data

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !password_verify($request->password, $user->password)) {
            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
        Auth::login($user, $request->boolean('remember-me', false));
        return redirect()->intended('dashboard');

        // $request->validate([
        //     /// 'email' => 'required|email|exists:users,email',
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // // Attempt to log the user in
        // if (auth()->attempt($request->only('email', 'password'))) {
        //     // Redirect to the intended page or dashboard
        //     return redirect()->intended('dashboard');
        // }

    }


    public function logout(Request $request)
    {
        auth()->logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Regenerate the CSRF token
        $request->session()->regenerateToken();
        // Redirect to the login page or home page
        return redirect()->route('home')->with('status', 'You have been logged out successfully.');
        // return redirect()->route('login.show');
        // return redirect()->back();
    }
}
