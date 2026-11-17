<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services_count' => Service::count(),
            'courses_count' => Course::count(),
            'events_count' => Event::count(),
            'blogs_count' => Blog::count(),
            'inquiries_count' => Inquiry::count(),
            'new_inquiries_count' => Inquiry::where('status', 'new')->count(),
        ];

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $upcomingEvents = Event::active()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'upcomingEvents', 'recentBlogs'));
    }
}

