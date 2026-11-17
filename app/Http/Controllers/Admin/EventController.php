<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::query();

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $events = $query->orderBy('event_date', 'asc')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:events,slug',
            'type' => 'required|string|in:seminar,webinar,spot,fair,pre-departure',
            'type_label' => 'nullable|string|max:100',
            'event_date' => 'required|date',
            'start_time' => 'required|string|max:50',
            'end_time' => 'nullable|string|max:50',
            'location' => 'required|string|max:255',
            'mode' => 'required|string|in:offline,online',
            'description' => 'nullable|string',
            'registration_link' => 'nullable|string|max:255',
            'seats_available' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title'] . '-' . rand(100, 999));
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['seats_available'] = $validated['seats_available'] ?? 50;

        Event::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:events,slug,' . $event->id,
            'type' => 'required|string|in:seminar,webinar,spot,fair,pre-departure',
            'type_label' => 'nullable|string|max:100',
            'event_date' => 'required|date',
            'start_time' => 'required|string|max:50',
            'end_time' => 'nullable|string|max:50',
            'location' => 'required|string|max:255',
            'mode' => 'required|string|in:offline,online',
            'description' => 'nullable|string',
            'registration_link' => 'nullable|string|max:255',
            'seats_available' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['seats_available'] = $validated['seats_available'] ?? 50;

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }
}

