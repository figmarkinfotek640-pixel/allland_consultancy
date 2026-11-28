<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\InstagramReel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::active()->orderBy('order', 'asc')->get();
        $events = Event::active()->take(6)->get();
        $blogs = Blog::published()->take(3)->get();
        $featuredCourses = Course::featured()->take(4)->get();
        $reels = InstagramReel::active()->ordered()->get();

        // Dynamic country destination data from MySQL
        $destinations = Destination::active()->get();
        $countries = [];
        foreach ($destinations as $d) {
            $countries[$d->country_code] = [
                'code' => $d->country_code,
                'name' => $d->name,
                'slug' => $d->slug,
                'flag' => $d->flag,
                'flag_url' => $d->flag_url,
                'tabBadge' => $d->tab_badge,
                'heroBadge' => $d->hero_badge,
                'eyebrow' => $d->eyebrow,
                'title' => $d->title,
                'image' => $d->image_url,
                'blurb' => $d->blurb,
                'stats' => $d->stats ?? [],
                'features' => $d->features ?? [],
                'tags' => $d->popular_courses ?? [],
            ];
        }

        $defaultCountry = !empty($countries) ? array_key_first($countries) : 'DE';
        $selectedCountry = $request->query('dest', $defaultCountry);
        if (!array_key_exists($selectedCountry, $countries)) {
            $selectedCountry = $defaultCountry;
        }
        $activeCountry = $countries[$selectedCountry] ?? null;

        return view('home', compact('services', 'events', 'blogs', 'featuredCourses', 'destinations', 'countries', 'activeCountry', 'selectedCountry', 'reels'));
    }
}

