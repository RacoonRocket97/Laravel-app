<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function showLogin() {
        return view('login', ['message' => '', 'message_type' => '']);
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['login'])
                    ->orWhere('name', $credentials['login'])
                    ->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect('/dashboard');
        }

        return view('login', [
            'message'      => 'Invalid login or password.',
            'message_type' => 'error',
        ]);
    }

    public function showRegister() {
        return view('register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'fan',
        ]);

        return redirect('/login')->with('success', 'Account created. Please log in.');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}