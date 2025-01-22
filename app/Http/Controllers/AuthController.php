<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    
    public function register_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'age' => 'required|integer|min:18',
            // 'city' => 'required',
        ]);
         
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);
        return redirect()->route('login')->with('success', 'You registered successfully! Please login to continue.');

    }

    public function login_store(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($credentials);
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.index')->with('success', 'You logged in successfully.');
        }else{
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        }
    }

    
    public function login() {
        return view('login');
    }

    
    // public function dashboard() {
    //     return view('layout.dashboard');
    // }


    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('error', 'You logged out successfully.');
    }
}
