<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a specific destination detail page.
     */
    public function show($slug)
    {
        $destination = Destination::where(function ($q) use ($slug) {
                $q->where('slug', $slug);
                if ($slug === 'uk') {
                    $q->orWhere('slug', 'united-kingdom');
                } elseif ($slug === 'united-kingdom') {
                    $q->orWhere('slug', 'uk');
                } elseif ($slug === 'tajikistan') {
                    $q->orWhere('slug', 'tajikisthan');
                } elseif ($slug === 'tajikisthan') {
                    $q->orWhere('slug', 'tajikistan');
                }
            })
            ->where('is_active', true)
            ->firstOrFail();

        $allDestinations = Destination::active()->get();

        // Related courses in this country
        $courses = Course::where('is_active', true)
            ->where(function ($q) use ($destination) {
                $q->where('country_code', $destination->country_code)
                  ->orWhere('country', 'like', "%{$destination->name}%");
            })
            ->orderBy('is_featured', 'desc')
            ->orderBy('order', 'asc')
            ->take(6)
            ->get();

        // Related events/webinars for this country
        $events = Event::active()
            ->where(function ($q) use ($destination) {
                $q->where('title', 'like', "%{$destination->name}%")
                  ->orWhere('description', 'like', "%{$destination->name}%");
            })
            ->take(3)
            ->get();

        return view('destinations.show', compact('destination', 'allDestinations', 'courses', 'events'));
    }
}
