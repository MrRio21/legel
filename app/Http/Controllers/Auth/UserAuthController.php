<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['login','register']]);
    // }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(UserRequest $request)
    {
        // Validation logic
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home'); // Adjust the redirect path as needed
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Adjust the redirect path as needed
    }

    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    public function changePassword(Request $request)
    {
        // Validation logic
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if the current password is correct
        if (Hash::check($request->current_password, Auth::user()->password)) {
            // Update the user's password
            Auth::user()->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect('/home')->with('success', 'Password changed successfully');
        }

        return back()->withErrors(['current_password' => 'Incorrect current password']);
    }
}
