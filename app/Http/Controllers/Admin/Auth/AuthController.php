<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role->name == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Check user role and redirect
            if ($user->role->name == 'admin') {
                flash()->success('Login Successfully!');
                return redirect()->route('admin.dashboard');
            }
        }
        flash()->error('Invalid Username or Password!');
        return view('admin.auth.login');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
