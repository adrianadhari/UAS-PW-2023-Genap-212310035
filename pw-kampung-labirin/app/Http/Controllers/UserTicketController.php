<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserTicketController extends Controller
{
    public function index()
    {
        $event_id = Event::where('user_id', auth()->id())->pluck('id');
        return view('user.dashboard.tickets.index', [
            'title' => 'Kelola Tiket',
            'tickets' => Ticket::with('event')->whereIn('event_id', $event_id)->get()
        ]);
    }


    public function create()
    {
        $events = Event::where('user_id', auth()->id())->get();
        return view('user.dashboard.tickets.create', [
            'title' => 'Membuat Tiket',
            'events' => $events
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ticket_name' => 'required|string|max:255',
            'ticket_price' => 'required|numeric|min:0',
            'ticket_quantity' => 'required|integer|min:1',
            'event_id' => 'required|integer',
        ]);
        Ticket::create($validatedData);

        return back()->with('success', 'Tiket berhasil dibuat');
    }


    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $events = Event::where('user_id', auth()->id())->get();
        return view('user.dashboard.tickets.edit', [
            'title' => 'Detail Ticket',
            'ticket' => $ticket,
            'events' => $events
        ]);
    }


    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'ticket_name' => 'required|string|max:255',
            'ticket_price' => 'required|numeric|min:0',
            'ticket_quantity' => 'required|integer|min:1',
            'event_id' => 'required|integer',   
        ]);

        $ticket = Ticket::findOrFail($id);

        $ticket->update($validatedData);

        return redirect()->route('user.tickets.index')->with('success', 'Tiket updated successfully.');
    }


    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return redirect()->route('user.tickets.index')->with('success', 'Tiket berhasil dihapus.');
    }
}
