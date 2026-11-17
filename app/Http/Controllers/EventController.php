<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->query('type', 'all');
        $query = Event::active();

        if ($type !== 'all' && in_array($type, ['seminar', 'webinar', 'spot', 'fair', 'pre-departure'])) {
            $query->where('type', $type);
        }

        $events = $query->paginate(9)->withQueryString();

        $eventTypes = [
            'all' => 'All Events',
            'seminar' => 'Seminars & Fairs',
            'webinar' => 'Webinars',
            'spot' => 'Spot Admissions',
        ];

        return view('events.index', compact('events', 'type', 'eventTypes'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $upcomingEvents = Event::where('id', '!=', $event->id)->where('is_active', true)->take(3)->get();
        return view('events.show', compact('event', 'upcomingEvents'));
    }
}

