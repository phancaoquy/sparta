<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;

class AuthController extends Controller
{
    public function index()
    {
        return view('client.Auth.login');
    }
    public function register()
    {
        return view('client.Auth.register');
    }
    public function store(RegisterRequest $request)
    {
        // Create account
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);
        flash()->success('Registration Successful!');
        return redirect()->route('client.login');
    }
    public function login(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            flash()->success('Login Successfully!');
            return redirect()->route('client.home');
        }

        flash()->error('Invalid Username or Password!');
        return redirect()->route('client.login');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect()->route('client.login');
    }
}
