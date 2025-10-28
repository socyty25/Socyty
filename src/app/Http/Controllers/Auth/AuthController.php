<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PreTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class AuthController extends Controller
{
    // Show the login & Register Page
    public function showloginregis(Request $request)
    {
        return view('loginregis');
    }

    // Handle login or registration
    public function loginOrRegister(Request $request)
    {
        if ($request->action === 'login') {
            return $this->login($request);
        } else if ($request->action === 'register') {
            return $this->register($request);
        } else {
            return view('loginregis');
        }
    }

    // Handle User Login
    public function login(Request $request)
    {
        $request->validate([
            'login_identifier' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginIdentifier = $request->login_identifier;

        $field = filter_var($loginIdentifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $loginIdentifier, 'password' => $request->password])) {
            return redirect('/')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['login_identifier' => 'Invalid username/email or password.']);
        }
    }

    // Handle User Registration
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:120|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:20',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
            'cpassword' => 'required|string|same:password',
        ], [
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, and one digit.',
            'cpassword.same' => 'Password confirmation does not match the password.',
        ]);

        $user = User::create([
            'username' => htmlspecialchars($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        PreTest::create([
            'user_id' => $user->id,
            'has_taken' => false,
        ]);

        Auth::login($user);

        event(new Registered($user));

        return redirect('/')->with('success', 'Registration successful!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
