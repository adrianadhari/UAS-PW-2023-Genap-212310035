<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class KelolaEventController extends Controller
{
    public function index()
    {
        return view('admin.kelola-event', [
            'title' => 'Kelola Event',
            'events' => Event::all()
        ]);
    }
}
