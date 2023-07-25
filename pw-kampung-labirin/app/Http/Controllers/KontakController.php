<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class KontakController extends Controller
{
    public function index()
    {
        return view('user.kontak', [
            'title' => 'Kontak'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|min:2|max:50',
            'no_hp' => 'required|numeric|digits_between:8,15',
            'domisili' => 'required|min:2',
            'email' => 'required|email:dns|max:50',
            'isi' => 'required|min:2|max:100'
        ]);

        Message::create($validatedData);
        return redirect('/kontak')->with('success', 'Pesan anda telah terkirim!');
    }
}
