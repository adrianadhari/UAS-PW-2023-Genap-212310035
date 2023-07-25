<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('user.events', [
            'title' => 'Event',
            'events' => Event::all()
        ]);
    }
    public function show($id)
    {
        return view('user.event', [
            'title' => 'Event',
            'event' => Event::find($id)
        ]);
    }
}
