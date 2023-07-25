<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('autentikasi.daftar', [
            "title" => "Daftar"
        ]);
    }

    public function store(Request $request)
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
        return redirect('/masuk')->with('success', 'Pendaftaran telah berhasil! Silahkan masuk.');
    }
}
