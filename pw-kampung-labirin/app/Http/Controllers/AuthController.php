<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', [
            "title" => "Masuk"
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else if (!auth()->user()->is_admin) {
                return redirect()->route('user.dashboard');
            }
        }
        return back()->with('failed', 'Gagal masuk!');
    }

    public function showRegisterForm()
    {
        return view('auth.register', [
            "title" => "Daftar"
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|min:2|max:50',
            'username' => 'required|min:3|max:30|unique:users',
            'email' => 'required|email:dns|max:50|unique:users',
            'password' => 'required|min:8|max:50',
            'konfirmasi_password' => 'required|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect()->route('login')->with('success', 'Pendaftaran telah berhasil! Silahkan masuk.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
