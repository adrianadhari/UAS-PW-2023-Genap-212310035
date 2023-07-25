<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KelolaUserController extends Controller
{
    public function index()
    {
        return view('admin/kelola-user', [
            "users" => User::all(),
            "title" => "Kelola User"
        ]);
    }

    public function show($id) {
        return view('admin/edit-user', [
            'title' => 'Kelola User',
            'user' => User::find($id)
        ]);
    }
    public function store(Request $request) {
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
    public function destroy($id) {
        User::destroy($id);
        return back()->with('berhasil', 'Data berhasil dihapus');
    }
}
