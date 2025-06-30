<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
      public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Hardcode user credentials
        $fixedEmail = 'admin@porto.com';
        $fixedPassword = 'password123';

        if ($credentials['email'] === $fixedEmail && $credentials['password'] === $fixedPassword) {
            // Cari user dengan email ini, jika tidak ada, buat user baru tanpa seeder
            $user = \App\Models\User::firstOrCreate(
                ['email' => $fixedEmail],
                [
                    'name' => 'Admin',
                    'password' => bcrypt($fixedPassword)
                ]
            );
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Berhasil masuk!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}


