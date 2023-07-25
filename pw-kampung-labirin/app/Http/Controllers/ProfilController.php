<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        return view('user.profil', [
            'title' => "Halaman Profil",
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email:dns',
            'username' => 'required'
        ]);
        $validatedData['no_hp'] = $request['no_hp'];
        $validatedData['domisili'] = $request['domisili'];
        $validatedData['nama_event_organizer'] = $request['nama_event_organizer'];
        if (User::where('username', $validatedData['username'])->update($validatedData) > 0) {
            return back()->with('success', 'Data berhasil diperbarui');
        }
        return back()->with('failed', 'Data gagal diperbarui');
    }
}
