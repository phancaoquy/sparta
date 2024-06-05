<?php

namespace App\Http\Controllers\client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('client.Auth.login');
    }
    public function register(){
        return view('client.Auth.register');
    }
    public function store(RegisterRequest $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);
    
        // Handle successful registration (e.g., redirect, login user)
        return redirect()->route('client.login')->with('success', 'Registration successful!');
    }
    public function login(Request $request){
        return view('');
    }
    public function logout(Request $request){
        return view('');
    }
}
