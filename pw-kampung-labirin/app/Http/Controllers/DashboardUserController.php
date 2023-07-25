<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('user.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function reservasiEvent()
    {
        return view('user.reservasi-event', [
            'title' => 'Reservasi Event'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required',
            'deskripsi_event' => 'required',
            'gambar_event' => 'required',
            'tanggal_event' => 'required',
            'jam_event' => 'required',
            'harga_tiket' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        if (empty(auth()->user()->nama_event_organizer)) {
            return back()->with('failed', 'Mohon maaf, lengkapi semua data diri terlebih dahulu pada profil!');
        }
        if (Event::create($validatedData)) {
            return back()->with('success', 'Event berhasil dibuat');
        }
    }
    public function kelolaEvent()
    {
        // @dd(Event::where('id', auth()->user()->id)->get());
        return view('user.kelola-event', [
            'title' => 'Kelola Event',
            'events' => Event::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
