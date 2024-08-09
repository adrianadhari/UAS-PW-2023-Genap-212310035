<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserEventController extends Controller
{
    public function index()
    {
        return view('user.dashboard.events.index', [
            'title' => 'Kelola Event',
            'events' => Event::where('user_id', auth()->user()->id)->get()
        ]);
    }


    public function create()
    {
        return view('user.dashboard.events.create', [
            'title' => 'Reservasi Event'
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required',
            'event_image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        if (empty(auth()->user()->nama_event_organizer)) {
            return back()->with('failed', 'Mohon maaf, lengkapi semua data diri terlebih dahulu pada profil!');
        }

        $event_image = $request->file('event_image');
        $fileName = Str::uuid() . '.' . $event_image->getClientOriginalName();
        $event_image->storeAs('public/events/', $fileName);
        $validatedData['event_image'] = $fileName;


        $validatedData['event_status'] = 'Proses';
        Event::create($validatedData);

        return back()->with('success', 'Event berhasil dibuat');
    }


    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('user.dashboard.events.show', [
            'title' => 'Detail Event',
            'event' => $event
        ]);
    }


    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('user.dashboard.events.edit', [
            'title' => 'Detail Event',
            'event' => $event
        ]);
    }


    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required',
            'event_image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('event_image')) {
            Storage::delete('public/events/' . $event->event_image);
            $event_image = $request->file('event_image');
            $fileName = time() . $event_image->getClientOriginalName();
            $event_image->storeAs('public/events/', $fileName);
            $validatedData['event_image'] = $fileName;
        }

        $event->update($validatedData);

        return redirect()->route('user.events.index')->with('success', 'Event updated successfully.');
    }


    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        if($event->event_image) {
            Storage::delete('public/events/' . $event->event_image);
        }
        $event->delete();
        return redirect()->route('user.events.index')->with('success', 'Event berhasil dihapus.');
    }
}
