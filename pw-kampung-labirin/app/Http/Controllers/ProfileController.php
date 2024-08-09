<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile', [
            'title' => "Halaman Profil",
        ]);
    }

    public function updateDataProfile(Request $request)
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

    public function updateDataPassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8|confirmed',
        ], [
            'newPassword.confirmed' => 'Konfirmasi password baru tidak cocok.',
            'newPassword.min' => 'Password baru harus minimal 8 karakter.',
            'currentPassword.required' => 'Password saat ini harus diisi.',
            'newPassword.required' => 'Password baru harus diisi.',
        ]);

        if (!Hash::check($request->currentPassword, Auth::user()->password)) {
            return back()->withErrors(['currentPassword' => 'Password saat ini salah.']);
        }

        Auth::user()->update([
            'password' => Hash::make($request->newPassword),
        ]);


        return back()->with('status', 'Password berhasil diperbarui.');
    }
}
