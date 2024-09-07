<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Registration
    //public function showRegistrationForm()
    //{
    //    return view('auth.register');
    //}

    //public function register(Request $request)
    //{
    //    $this->validate($request, [
     //       'name' => 'required|string|max:255',
      //      'email' => 'required|email|unique:users',
       //     'password' => 'required|min:8|confirmed',
       // ]);

       // User::create([
       //     'name' => $request->name,
        //    'email' => $request->email,
        //    'password' => Hash::make($request->password),
       // ]);

       // return redirect('/login')->with('status', 'Registration complete. Please log in.');
    //}

    // Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect('/login')->with('status', 'Login failed. Please check your credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
